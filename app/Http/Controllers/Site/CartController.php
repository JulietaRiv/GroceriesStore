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
        //dd($request->all());
        /*
        1levantar todos los campos del carrito
        2componer un array a medida (levantando precio de la base)
        3guardar en variable de session
        4asignar a la vista la variable de sesion
        5dividir el form en 2 y renderizar el pedido
        6disable de carro / reset
        */
        return view('Site/checkoutForm');
    }

    public function sendOrder(Request $request)
    {
        /*
        1 validar los datos recibidos
        2 levantar el carrito de la sesion
        3 guardar en base
        4 envio de mail con aviso
        5 gracias    
        6 reset de carro*/
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
            //aca me dispongo a guardar los campos en un registro nuevo de orders
            //y swal con mensaje de gracias x tu compra
            return redirect()->route('index');
        }
    }




}