<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Product;
use App\Category;
use App\Brand;
use App\Offer;
use App\Highlighted;
use Str;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'description'=>'required',
            'presentations'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'presentations'=>'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {
        $product = new Product();
        $product->name = $request->name;
        $product->slug_name = '-';
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->description = $request->description;
        $product->presentations = json_decode($request->presentations, true);
        $product->celiacs = data_get($request, 'celiacs', 0);
        $product->organic = data_get($request, 'organic', 0);
        $product->agroecological = data_get($request, 'agroecological', 0);
        $product->vegan = data_get($request, 'vegan', 0);
        //$product->photo = $request->hasFile('image')->isValid();
        $stock = 0;
        $product->offer = 0;
        $product->highlighted = 0;  
        foreach ($product->presentations as $presentation){
            $stock += $presentation['stock'];
            if ($presentation['offer'] == true){
                $product->offer = 1;
            }
            if ($presentation['highlighted'] == true){
                $product->highlighted = 1;
            }
            if ($presentation['main'] == true){
                $product->main_presentation = $presentation['presentation'];
                $product->price = $presentation['price'];
                $product->promo_price = $presentation['promo_price'];
            }
        }    
        $product->stock = $stock != 0 ? 1 : 0;        
        $product->save();
        $product->slug_name = Str::of($product->name)->slug('-').'-'.$product->id;
        $product->save();
        return redirect()->route("products")->with('success','Excelente, registro guardado!');
        }
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
        $categories = Category::where('active', 1)->get();
        $brands = Brand::where('active', 1)->get();
        $product = Product::where('id', $id)->first();
        return view ("Admin/products/Edit", ['product'=>$product, 'brands'=>$brands, 'categories'=>$categories]);       
    }

    public function update(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $product->name = $request->nameEdit;
        $product->update();      
        return redirect()->route("products")->with('success','Excelente, registro guardado!');
    }

    public function highlightedProducts()
    {
        $highlightedProducts = Product::where('highlighted', 1)->get();
        return view ('Admin/products/Highlighted', ['highlightedProducts'=>$highlightedProducts]);
    }

    public function offerProducts()
    {
        $offerProducts = Product::where('offer', 1)->get();
        return view ('Admin/products/Offer', ['offerProducts'=>$offerProducts]);
    }

    public function offerSelected($ids)
    {
        Offer::all();
        Offer::query()->truncate();
        $arrids = explode(",", $ids);
        foreach ( $arrids as $i=>$id ){
            $eachOffer = new Offer();
            $eachOffer->product_id = $id;
            $eachOffer->presentation_name = '';
            $product = Product::where('id', $id)->first();   
            $presentations = $product->presentations;
            foreach ( $presentations as $pres ) {     
                if ( $pres['offer'] == 1 ){                
                    $eachOffer->presentation_name = $pres['presentation'];
                }
            }
            $eachOffer->order_num = $i;
            $eachOffer->save();
        }
        return redirect()->back();
    }

    public function highlightedSelected($ids)
    {
        Highlighted::all();
        Highlighted::query()->truncate();
        $arrids = explode(",", $ids);
        foreach ( $arrids as $i=>$id ){
            $eachHighlighted = new Highlighted();
            $eachHighlighted->product_id = $id;
            $eachHighlighted->order_num = $i;
            $eachHighlighted->presentation_name = '';
            $product = Product::where('id', $id)->first();  
            $presentations = $product->presentations;
            foreach ( $presentations as $pres ) {  
                if ( $pres['highlighted'] == 1 ){                
                  $eachHighlighted->presentation_name = $pres['presentation'];
                }
            }
            $eachHighlighted->save();
        }
        return redirect()->back();
    }

}