<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;


class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::where('active', 1)->get();
        $offer_products = Product::where('offer', 1)->get();
        $highlighted_products = Product::where('highlighted', 1)->get();
        return view('Site/index', ['highlighted_products'=>$highlighted_products, 
        'offer_products'=>$offer_products, 'categories'=>$categories]);
    }

    public function products($category_slug_name = 'especias-salsas-sal-y-pimienta')
    {
        $categories = Category::where('active', 1)->get();
        $category_id = Category::where('slug_name', $category_slug_name)->first()->id;
        $products = Product::where('category_id', $category_id)->get();
        return view('Site/categoriesSite', ['categories'=>$categories, 'products'=>$products]);
    }

    public function detailProduct($slug_name)
    {
        $product = Product::where('slug_name', $slug_name)->first();
        $presentations = $product->presentations;
        //dd($presentations);
        return view('Site/detailProduct', ['product'=>$product, 'presentations'=>$presentations]);
    }
    
    public function filters($param)
    {
        $products = Product::where($param, 1)->get();
        //return $products;
    }

}