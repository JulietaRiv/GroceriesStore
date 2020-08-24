<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Offer;
use App\Highlighted;


class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::where('active', 1)->get();
        $offer = Offer::all()->pluck('product_id');
        $orderOffer = Offer::whereIn('product_id', $offer)->get();
        $offer_products = Product::whereIn('id', $offer)->get();
        $highlighted = Highlighted::all()->pluck('product_id');
        $highlighted_products = Product::whereIn('id', $highlighted)->get();
        $orderhighlighted = Highlighted::whereIn('product_id', $highlighted)->get();
        return view('Site/index', ['highlighted_products'=>$highlighted_products, 'orderhighlighted'=>$orderhighlighted,
        'orderOffer'=>$orderOffer, 'offer_products'=>$offer_products, 'categories'=>$categories]);
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
        return view('Site/detailProduct', ['product'=>$product, 'presentations'=>$presentations]);
    }
    
    public function filters($param)
    {
        $products = Product::where($param, 1)->get();
        //return $products;
    }

    public function order($param)
    {
        $products = Product::orderBy('price', 'DESC')->get();
        
    }
    

}