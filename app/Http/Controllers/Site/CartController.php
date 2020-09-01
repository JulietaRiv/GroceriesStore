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
        $claves = array_keys( $request->all());
        $itemsList = [];
        foreach ($claves as $clave){
            $itemNum = substr($clave, -1);
            if ( !$itemsList.$itemNum ){
                if ( is_numeric($itemNum) ){
                    $price = 0;
                    $product = Product::where('id', $request->{'shipping_' . $itemNum})->first();
                    foreach ($product->presentations as $presentation){
                        if ($presentation['presentation'] == $request->{'shipping2_' . $itemNum}){
                            $price = $presentation['price'];
                        }
                    }
                    $itemsList[$itemNum] = [
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
        //3guardar en variable de session
        $request->session()->put('itemsList', $itemsList);
       // 4asignar a la vista la variable de sesion
        return view('Site/checkoutForm', ['itemsList'=> $itemsList]);
    }

    public function sendOrder(Request $request)
    {

       // dd('holaaa');
        /*
        2 levantar el carrito de la sesion    
        4 envio de mail con aviso
    */
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'adress'=>'required',
            'cel'=>'required',
            'payment_method'=>'required',
            'items'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $order = Order::create();
            $order->name = $request->completeName;
            $order->adress = $request->adress;
            $order->cel = $request->cel;
            $order->payment_method = $request->payment_method;
            $order->comment = $request->message;
            $order->items = "pedido stringifiado";
            //aca mostrar gracias x tu compra!
            return redirect()->route('index');
        }
    }




}