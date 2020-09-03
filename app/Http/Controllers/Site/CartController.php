<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Request;


class CartController extends Controller
{

    public function checkout(Request $request)
    {
        //1levantar todos los campos del carrito
        //2componer un array a medida (levantando precio de la base)
        if ($request->isMethod('post')) {
            $claves = array_keys($request->all());
            $itemsList = [];
            foreach ($claves as $clave) {
                $itemNum = explode('_', $clave);
                if ($itemNum = array_pop($itemNum)) {
                    if (is_numeric($itemNum)) {
                        $price = 0;
                        if ($product = Product::where('id', $request->{'shipping_' . $itemNum})->first()){
                        foreach ($product->presentations as $presentation) {
                            if ($presentation['presentation'] == $request->{'shipping2_' . $itemNum}) {
                                $price = $presentation['price'];
                            }
                        }
                        $itemsList[$itemNum - 1] = [
                            'product_id' => $request->{'shipping_' . $itemNum},
                            'name' => $request->{'item_name_' . $itemNum},
                            'presentation' => $request->{'shipping2_' . $itemNum},
                            'quantity' => $request->{'quantity_' . $itemNum},
                            'unit_price' => $price,
                            'price' => $request->{'quantity_' . $itemNum} * $price,
                        ];
                    } 
                    }
                }
            }
            
            //3guardar en variable de session
            $request->session()->put('itemsList', $itemsList);
        } else {
            $itemsList = $request->session()->get('itemsList');
        }
        return view('Site/checkoutForm', ['itemsList' => $itemsList]);
    }

    public function sendOrder(Request $request)
    {
        //  2 levantar el carrito de la sesion    
        //  4 envio de mail con aviso
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'cel' => 'required',
            'payment_method' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $order = new Order();
            $order->name = $request->input('name');
            $order->address = $request->input('address');
            $order->cel = $request->input('cel');
            $order->payment_method = $request->input('payment_method');
            $order->comment = $request->input('message');
            $order->items = $request->session()->get('itemsList');
            $order->save();
            foreach ($order->items as $item){
                $product = Product::where('id', 'product_id')->get();
                    foreach ($product->presentations as $presentation){
                        if ($product->name .' - '. $presentation['presentation'] == $item['name']){
                            $presentation['stock'] = $presentation['stock'] - $item['quantity'];
                            $product->save();
                        }
                    }
            } 
            return redirect()->route('index');
        }
    }
}
