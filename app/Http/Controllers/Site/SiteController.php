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
    
    public function filterProduct($param)
    {
        $types['organic'] = ['type'=>'orgánicos', 'type_icon'=>'organicos.jpg'];
        $types['celiacs'] = ['type'=>'sin tacc', 'type_icon'=>'celiacs.png'];
        $types['agroecological'] = ['type'=>'agroecológicos', 'type_icon'=>'agroecologicos.png'];
        $types['vegan'] = ['type'=>'veganos', 'type_icon'=>'veganos.jpg'];   
        $products = Product::where($param, 1)->get();
        return view('Site/productsList', ['products'=>$products, 'type'=>$types[$param]['type'], 'type_icon'=>$types[$param]['type_icon']]); 
    }

    public function orderProduct($param)
    {
        
        if ($param == 'precio_desc'){
            $products = Product::orderBy('price', 'DESC')->get();
        } else if ($param == 'precio_asc'){
            $products = Product::orderBy('price', 'ASC')->get();
        } else if ($param == 'alf_a'){
            $products = Product::orderBy('name', 'ASC')->get();
        }
        return view('Site/categoriesSite', ['categories'=>$categories, 'products'=>$products]);
    }
    

}