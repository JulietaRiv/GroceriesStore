<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Product;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::where('active', 1)->get();
        return view ("Admin/products/Index", ["products" => $products]);
    }

    public function create()
    {
        return view ("Admin/products/Form");
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->save();
        return redirect()->route("products")->with('success','Excelente, registro guardado!');
    }

    public function detail ($id)
    {
        $products = Product::where('id', '=', $id)->first();
        return view ("Admin/products/Detail", ["product" => $product] );
    }

    public function delete ($id)
    {
        if ($product = Product::where('id', '=', $id)->first()){
            $product->delete();
            return redirect()->route("products")->with('success','Excelente, registro guardado!');
        } else {
            return redirect()->route("products")->with('errors','Oops ocurrió un error!');
        }  
    }

    public function edit($id)
    {
        $product = Product::where('id', '=', $id)->first();
        return view ("Admin/products/Edit");       
    }

    public function update (Request $request)
    {
        $product = Product::where('id', '=', $request->id)->first();
        $product->name = $request->nameEdit;
        $product->update();      
        return redirect()->route("products")->with('success','Excelente, registro guardado!');
    }

}