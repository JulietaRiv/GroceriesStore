<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Order;
use Illuminate\Support\Str;


class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('id', '!=', '')->get();
        return view ("Admin/orders/Index", ["orders" => $orders]);
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

}