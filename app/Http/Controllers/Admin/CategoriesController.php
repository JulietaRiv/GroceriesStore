<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Categories;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = '';
        return view ("Admin/categories/Category", ["categories" => $categories]);
    }

    public function create()
    {
        return view ("Admin/categories/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("Admin/Category");
    }

    public function detail ($id)
    {
        return view ("Admin/categories/DetailView", ["category" => $category] );
    }

    public function delete ($id)
    {
        if ($category = Category::where('id', '=', $id)->first()){
            $category->delete();
            return redirect()->route("Admin/categories")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("Admin/categories")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("Admin/categories/EditForm");        
    }

    public function update (Request $request)
    {
        return redirect()->route("Admin/categories")->with('success','Record updated succesfully!');
    }

}