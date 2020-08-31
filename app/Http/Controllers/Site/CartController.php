<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Offer;
use App\Highlighted;
use \Illuminate\Http\Request;
use \Illuminate\Pagination\LengthAwarePaginator;


class CartController extends Controller
{

    public function checkout(Request $request)
    {
        dd($request->all());
        
        /*
        1levantar todos los campos del carrito
        2componer un array a medida (levantando precio de la base)
        3guardar en variable de session
        4asignar a la vista la variable de sesion
        5dividir el form en 2 y renderizar el pedido
        6disable de carro / reset
        $('view-cart').disabled = true;
        */
        return view('Site/checkoutForm');
    }

    public function sendOrder(Request $request)
    {
        /*
        2 levantar el carrito de la sesion    
        4 envio de mail con aviso
    */
        $validator = Validator::make($request->all(), [
            'completeName'=>'required',
            'adress'=>'required',
            'cel'=>'required',
            'payment_method'=>'required',
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
            $order->order = "pedido stringifiado";
            return redirect()->route('index');
        }
    }




}