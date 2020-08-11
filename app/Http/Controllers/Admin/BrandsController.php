<?php

namespace App\Http\Controllers\Brands;

use Illuminate\Http\Request;
use App;
use App\Brands;

class BrandsController extends Controller
{
    public function index()
    {
        return view ("brands/Brand", ["brands" => $brands]);
    }

    public function create()
    {
        return view ("Brands/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("Brand");
    }

    public function detail ($id)
    {
        return view ("brands/DetailView", ["brand" => $brand] );
    }

    public function delete ($id)
    {
        if ($brand = Brand::where('id', '=', $id)->first()){
            $brand->delete();
            return redirect()->route("brands")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("brands")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("Brands/EditForm");        
    }

    public function update (Request $request)
    {
        return redirect()->route("brands")->with('success','Record updated succesfully!');
    }

}