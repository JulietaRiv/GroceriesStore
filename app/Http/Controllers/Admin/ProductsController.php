<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Product;
use App\Category;
use App\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\productForm;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::where('active', 1)->get();
        return view ("Admin/products/Index", ["products" => $products]);
    }

    public function create()
    {
        $categories = Category::where('active', 1)->get();
        $brands = Brand::where('active', 1)->get();
        return view ("Admin/products/Form", ['brands'=>$brands, 'categories'=>$categories]);
    }

    public function store(App\Http\Requests\productForm $request)
    {
        $validated = $request->validated();
        dd($request);
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->description = $request->description;
        $product->for_celiacs = $request->for_celiacs;
        $product->organic = $request->organic;
        $product->agroecological = $request->agroecological;
        $product->vegan = $request->vegan;
        $product->presentations = $request->presentations;
        $product->offer = $request->offer;
        $product->highlighted = $request->highlighted;
        $product->save();
        return redirect()->route("products")->with('success','Excelente, registro guardado!');
    }

    public function detail($id)
    {
        $product = Product::where('id', $id)->first();
        return view ("Admin/products/Detail", ["product" => $product] );
    }

    public function delete($id)
    {
        if ($product = Product::where('id', $id)->first()){
            $product->delete();
            return redirect()->route("products")->with('success','Excelente, registro guardado!');
        } else {
            return redirect()->route("products")->with('errors','Oops ocurrió un error!');
        }  
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view ("Admin/products/Edit");       
    }

    public function update(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $product->name = $request->nameEdit;
        $product->update();      
        return redirect()->route("products")->with('success','Excelente, registro guardado!');
    }

}