<?php

namespace App\Http\Controllers\Categorys;

use Illuminate\Http\Request;
use App;
use App\Categorys;

class CategoriesController extends Controller
{
    public function index()
    {
        return view ("categories/Category", ["categorys" => $categorys]);
    }

    public function create()
    {
        return view ("categories/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("Category");
    }

    public function detail ($id)
    {
        return view ("categories/DetailView", ["categories" => $categories] );
    }

    public function delete ($id)
    {
        if ($category = Category::where('id', '=', $id)->first()){
            $category->delete();
            return redirect()->route("categories")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("categories")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("Categories/EditForm");        
    }

    public function update (Request $request)
    {
        return redirect()->route("categories")->with('success','Record updated succesfully!');
    }

}