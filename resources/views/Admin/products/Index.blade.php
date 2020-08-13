@extends('adminlte::page')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')
    
    <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Productos</h3>
        <h4><a href="/admin/products/add"><span class="badge bg-green">Agregar +</span></a></h4>
        </div>  
            <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th style="width: 20%">Nombre</th>
                    <th>Categoría</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Orgánico</th>
                    <th>Sin Tacc</th>
                    <th>Agroecológico</th>
                    <th style="width: 15%">Acción</th>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>      
                    <td><a href="/admin/products/edit/{{ $product->id }}"><span class="badge bg-green">Editar</span></a>
                    <a href="/admin/products/view/{{ $product->id }}"><span class="badge bg-blue">Ver</span></a>
                    <a href="/admin/products/delete/{{ $product->id }}"><span class="badge bg-red">Eliminar</span></a></td>
                </tr>
                </tbody>
                
            </table>
            </div>
            <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
            </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop

   