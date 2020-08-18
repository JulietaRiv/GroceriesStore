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

    public function store(Request $request)
    {
        //$validated = $request->validated();
        
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->description = $request->description;
        $product->presentations = json_decode($request->presentations);
        //dd($product->presentations);
        $product->celiacs = data_get($request, 'celiacs', 0);
        $product->organic = data_get($request, 'organic', 0);
        $product->agroecological = data_get($request, 'agroecological', 0);
        $product->vegan = data_get($request, 'vegan', 0);
        $stock = 0;
        $offer = 0;
        $highlighted = 0;
        foreach ($product->presentations as $presentation){
            $stock += $presentation['stock'];
            if ($presentation['offer'] == true){
                $offer += 1;
            }
            if ($presentation['highlighted'] == true){
                $offer += 1;
            }
        }    
        $product->stock = $stock;
        $product->offer = $offer != 0 ? 1 : 0;
        $product->highlighted = $highlighted != 0 ? 1 : 0;
        $product->price = 0;
        $product->promo_price = 0;
        //dd($product);
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