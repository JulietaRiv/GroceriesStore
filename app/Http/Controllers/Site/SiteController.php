<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Offer;
use App\Highlighted;
use \Illuminate\Http\Request;
use \Illuminate\Pagination\LengthAwarePaginator;


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

  /*  public function products($category_slug_name = 'especias-salsas-sal-y-pimienta')
    {
        $categories = Category::where('active', 1)->get();
        $category_id = Category::where('slug_name', $category_slug_name)->first()->id;
        $products = Product::where('category_id', $category_id)->get();
        return view('Site/categoriesSite', ['categories'=>$categories, 'products'=>$products]);
    }*/

    public function detailProduct($slug_name)
    {
        $product = Product::where('slug_name', $slug_name)->first();
        $presentations = $product->presentations;
        return view('Site/detailProduct', ['product'=>$product, 'presentations'=>$presentations]);
    }
    
   public function products($criteria, $slug_name, Request $request)
    {
        if ($request->items){
            $request->session()->put('items', $request->items);
        } else {
            if (!$request->session()->has('items')){
                $request->session()->put('items', 12);
            }
        }
        if ($request->order){
            $order = explode(',', $request->order);
            $request->session()->put('orderField', $order[0]);
            $request->session()->put('orderDirection', $order[1]);
        } else {
            if (!$request->session()->has('orderField')) {
                $request->session()->put('orderField', 'price');
                $request->session()->put('orderDirection', 'asc');
            }
        }
        $products = Product::where('active', 1);
        if ($criteria == 'type'){
            $types['organic'] = ['title'=>'orgánicos', 'type_icon'=>'organicos.png'];     
            $types['celiacs'] = ['title'=>'sin tacc', 'type_icon'=>'celiacs.png'];
            $types['agroecological'] = ['title'=>'agroecológicos', 'type_icon'=>'agroecologicos.png'];
            $types['vegan'] = ['title'=>'veganos', 'type_icon'=>'veganos.png'];   
            $title = $types[$slug_name];
            $products = $products->where($slug_name, 1);
            $col = 4;
        } 
        if ($criteria == 'category'){
            $category = Category::where('slug_name', $slug_name)->first();
            $title = ['title'=>$category->name, 'type_icon'=>0];
            $products = $products->where('category_id', $category->id);
            $col = 3;
            $categories = Category::where('active', 1)->get();
        }
        $products = $products->orderBy(session('orderField'), session('orderDirection'));
        $products = $products->paginate(session('items'));
        
        return view($view, [
            'products'=>$products, 
            'items'=>session('items'), 
            'order'=>session('orderField').','.session('orderDirection'), 
            'title'=>$title, 
            'categories'=>$categories,
        ]); 
    }
   
}