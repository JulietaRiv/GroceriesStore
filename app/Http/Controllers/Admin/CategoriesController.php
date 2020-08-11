<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = '';
        //$categories = Category::where('active', 1)->get();
        //dd($categories);
        return view ("Admin/categories/Index", ["categories" => $categories]);
    }

    public function create()
    {
        return view ("Admin/categories/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("Admin/categories/Index");
    }

    public function detail ($id)
    {
        return view ("Admin/categories/Detail", ["category" => $category] );
    }

    public function delete ($id)
    {
        if ($category = Category::where('id', '=', $id)->first()){
            $category->delete();
            return redirect()->route("Admin/categories/Index")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("Admin/categories/Index")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("Admin/categories/Edit");        
    }

    public function update (Request $request)
    {
        return redirect()->route("Admin/categories/Index")->with('success','Record updated succesfully!');
    }

}