<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Str;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;

class OrdersController extends Controller
{
    use Notification;
    public function via($notifiable)
    {
        return [WebPushChannel::class];
    }

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title('Approved!')
            ->icon('/approved-icon.png')
            ->body('Your account was approved!')
            ->action('View account', 'view_account')
            ->options(['TTL' => 1000]);
            // ->data(['id' => $notification->id])
            // ->badge()
            // ->dir()
            // ->image()
            // ->lang()
            // ->renotify()
            // ->requireInteraction()
            // ->tag()
            // ->vibrate()
    }


    public function index(Request $request)
    {      
        $orders = Order::query()->orderBy('id', 'desc');   
        $appends = [];
        if ($request->orderStatus != 'Todos' && $request->orderStatus != null){
            $orders = $orders->where('status', '=', $request->orderStatus);
            $appends['orderStatus'] = $request->orderStatus;
        } 
        if ($request->orderNum != null){
            $orders = $orders->where('id', '=', $request->orderNum);
            $appends['orderNum'] = $request->orderNum;
        } 
        if ($request->orderText != null){
            $orders = $orders->search($request->orderText);
            $appends['orderText'] = $request->orderText;
        }
        $orders = $orders->paginate(30);
        if (count($appends) > 0){
            $links = $orders->appends($appends)->links();
        } else {
            $links = $orders->links();
        }
        return view ("Admin/orders/Index", [
            "orders" => $orders, 
            'links'=>$links, 
            'orderStatus'=> $request->orderStatus,
            'orderNum' => $request->orderNum,
            'orderText' => $request->orderText,
        ]);
    }

    public function delete ($id)
    {
        if ($order = Order::where('id', '=', $id)->first()){       
            $order->delete();
            return redirect()->route("orders")->with('success','Excelente, registro guardado!');
        } else {
            return redirect()->route("orders")->with('errors','Oops ocurrió un error!');
        }  
    }

    public function detail($id)
    {
        $order = Order::where('id', $id)->first();
        $items = json_decode($order->items, true);
        return view ("Admin/orders/Detail", ["order" => $order, 'items'=>$items]);
    }

    public function edit($id)
    {
        $order = Order::where('id', $id)->first();
        return view ("Admin/orders/Edit", ["order" => $order]);
    }

    public function update(Request $request)
    {   
        $order = Order::where('id', $request->input('orderId'))->first();
        $order->name = $request->input('name2');
        $order->address = $request->input('address2');
        $order->cel = $request->input('cel2');
        $order->payment_method = $request->input('payment_method2');
        $order->comment = $request->input('message2');
        $order->status = $request->input('status');
        $order->items = json_decode($request->input('itemsList'), true);
        $order->total_units = $request->input('totalUnits');
        $order->total_price = $request->input('totalPrice');
        $order->save();
        return redirect()->route("orders")->with('success', 'Excelente, registro guardado!');
    }

}