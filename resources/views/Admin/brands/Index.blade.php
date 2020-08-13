@extends('adminlte::page')

@section('title', "Brands")

@section('content_header')
    
@stop

@section('content')
    
    <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Marcas</h3>
        <h4><a href="/admin/brands/add"><span class="badge bg-green">Agregar +</span></a></h4>
        </div>  
            <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Nombre</th>
                    <th style="width: 20%">Acción</th>
                </tr>
                @foreach ( $brands as $brand)
                <tr>
                    <td>{{ $brand->name }}</td>           
                    <td><a href="/admin/brands/edit/{{ $brand->id }}"><span class="badge bg-green">Editar</span></a>
                    <a href="/admin/brands/detail/{{ $brand->id }}"><span class="badge bg-blue">Ver</span></a>
                    <a href="/admin/brands/delete/{{ $brand->id }}"><span class="badge bg-red">Eliminar</span></a></td>
                </tr>
                @endforeach
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

   