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
        if ($request->isMethod('post')) {
            $claves = array_keys($request->all());
            $itemsList = [];
            foreach ($claves as $clave) {
                $itemNum = explode('_', $clave);
                if ($itemNum = array_pop($itemNum)) {
                    if (is_numeric($itemNum)) {
                        $price = 0;
                        if ($product = Product::where('id', $request->{'shipping_' . $itemNum})->first()) {
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
            $request->session()->put('itemsList', $itemsList);
        } else {
            $itemsList = $request->session()->get('itemsList');
        }
        return view('Site/checkoutForm', ['itemsList' => $itemsList]);
    }

    public function sendOrder(Request $request)
    {
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
            foreach ($order->items as $item) {
                $product = Product::where('id', $item['product_id'])->first();
                $stock = 0;
                $presentations = $product->presentations;
                foreach ($presentations as $i => $presentation) {
                    $pres = explode('-   ', $item['name']);
                    if ($presentation['presentation'] == $pres[1]) {
                        $presentations[$i]['stock'] = $presentations[$i]['stock'] - $item['quantity'];
                    }
                    $stock += $presentation['stock'];
                }
                $product->presentations = $presentations;
                $product->stock = ($stock != 0) ? 1 : 0;
                $product->save();
            }
            return redirect()->route('index');
        }
    }
}
