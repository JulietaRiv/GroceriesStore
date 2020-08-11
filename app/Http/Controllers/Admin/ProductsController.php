<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App;
use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
        return view ("products/Product", ["products" => $products]);
    }

    public function create()
    {
        return view ("Products/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("Product");
    }

    public function detail ($id)
    {
        return view ("products/DetailView", ["product" => $product] );
    }

    public function delete ($id)
    {
        if ($product = Product::where('id', '=', $id)->first()){
            $product->delete();
            return redirect()->route("products")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("products")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("Products/EditForm");        
    }

    public function update (Request $request)
    {
        return redirect()->route("products")->with('success','Record updated succesfully!');
    }

}