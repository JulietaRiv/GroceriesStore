<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Brands;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = '';
        return view ("Admin/brands/Brand", ["brands" => $brands]);
    }

    public function create()
    {
        return view ("Admin/brands/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("Admin/Brand");
    }

    public function detail ($id)
    {
        return view ("Admin/brands/DetailView", ["brand" => $brand] );
    }

    public function delete ($id)
    {
        if ($brand = Brand::where('id', '=', $id)->first()){
            $brand->delete();
            return redirect()->route("Admin/brands")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("Admin/brands")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("Admin/brands/EditForm");        
    }

    public function update (Request $request)
    {
        return redirect()->route("Admin/brands")->with('success','Record updated succesfully!');
    }

}