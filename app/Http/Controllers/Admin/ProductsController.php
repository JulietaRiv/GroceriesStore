<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Products;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $products = '';
        return view ("Admin/products/Product", ["products" => $products]);
    }

    public function create()
    {
        return view ("Admin/products/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("Admin/Product");
    }

    public function detail ($id)
    {
        return view ("Admin/products/DetailView", ["product" => $product] );
    }

    public function delete ($id)
    {
        if ($product = Product::where('id', '=', $id)->first()){
            $product->delete();
            return redirect()->route("Admin/products")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("Admin/products")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("Admin/products/EditForm");        
    }

    public function update (Request $request)
    {
        return redirect()->route("Admin/products")->with('success','Record updated succesfully!');
    }

}