<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;


class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('active', 1)->get();
        $offer_products = Product::where('offer', 1)->get();
        $highlighted_products = Product::where('highlighted', 1)->get();
        return view('Site/index', ['highlighted_products'=>$highlighted_products, 
        'offer_products'=>$offer_products, 'categories'=>$categories]);
    }
    
}