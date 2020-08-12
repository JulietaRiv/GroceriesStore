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
        $brands = Brand::where('active', 1)->get();
        return view ("Admin/brands/Index", ["brands" => $brands]);
    }

    public function create()
    {
        return view ("Admin/brands/Form");
    }

    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        return redirect()->route("brands")->with('success','Excelente, registro guardado!');
    }

    public function detail ($id)
    {
        $brand = Brand::where('id', '=', $id)->first();
        //aca quiza hacer query a products y traer los q pertenezcan
        return view ("Admin/brands/Detail", ["brand" => $brand] );
    }

    public function delete ($id)
    {
        if ($brand = Brand::where('id', '=', $id)->first()){
            $brand->delete();
            return redirect()->route("brands")->with('success','Excelente, registro guardado!');
        } else {
            return redirect()->route("brands")->with('errors','Oops ocurrió un error!');
        }  
    }

    public function edit($id)
    {
        $brand = Brand::where('id', '=', $id)->first();
        return view ("Admin/brands/EditForm");        
    }

    public function update (Request $request)
    {
        $brand = Brand::where('id', '=', $equest->id)->first();
        $brand->name = $request->nameEdit;
        $brand->update();
        return redirect()->route("brands")->with('success','Excelente, registro guardado!');
    }

}