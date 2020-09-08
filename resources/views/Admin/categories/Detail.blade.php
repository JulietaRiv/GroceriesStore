@extends('adminlte::page')

@section('title', "Categories")

@section('content_header')
   
@stop

@section('content')

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">{{ $category->name }}</h3>
            </div>
            <br>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Productos</th>
                            <th>Marcas</th>
                            <th style="width: 20%">Stock</th>
                            <th>Acción</th>
                        </tr>
                        @foreach ( $products as $product )
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->brand->name }}</td>
                            <td>@if ( $product->stock == 1) Si @else No @endif</td>
                            <td><a href="/admin/products/edit/{{ $product->id }}"><span class="badge bg-green">Editar</span></a></td>
                        </tr>          
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> 
        
    </script>
@stop