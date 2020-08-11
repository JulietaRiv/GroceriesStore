<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Categorys;
use App\Http\Controllers\Controller;

class CategorysController extends Controller
{
    public function index()
    {
        $categorys = '';
        return view ("Admin/categorys/Category", ["categorys" => $categorys]);
    }

    public function create()
    {
        return view ("Admin/categorys/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("Admin/Category");
    }

    public function detail ($id)
    {
        return view ("Admin/categorys/DetailView", ["category" => $category] );
    }

    public function delete ($id)
    {
        if ($category = Category::where('id', '=', $id)->first()){
            $category->delete();
            return redirect()->route("Admin/categorys")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("Admin/categorys")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("Admin/categorys/EditForm");        
    }

    public function update (Request $request)
    {
        return redirect()->route("Admin/categorys")->with('success','Record updated succesfully!');
    }

}