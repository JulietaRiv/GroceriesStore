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
        $categories = Category::where('active', 1)->get();
        return view ("Admin/categories/Index", ["categories" => $categories]);
    }

    public function create()
    {
        return view ("Admin/categories/Form");
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route("categories")->with('Excelente, registro guardado!');
    }

    public function detail ($id)
    {
        $category = Category::where('id', '=', $id)->first();
        //aca quiza hacer query a products y traer los q pertenezcan
        return view ("Admin/categories/Detail", ["category" => $category] );
    }

    public function delete ($id)
    {
        if ($category = Category::where('id', '=', $id)->first()){       
            $category->delete();
            return redirect()->route("categories")->with('success','Excelente, registro guardado!');
        } else {
            return redirect()->route("categories")->with('errors','Oops ocurrió un error!');
        }  
    }

    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        return view ("Admin/categories/Edit", ['category' => $category]);        
    }

    public function update (Request $request)
    {
        $category = Category::where('id', '=', $request->id)->first();
        $category->name = $request->nameEdit;
        $category->update();
        return redirect()->route("categories")->with('success','Excelente, registro guardado!');
    }

}