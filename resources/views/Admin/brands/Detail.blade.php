@extends('adminlte::page')

@section('title', "Brands")

@section('content_header')
   
@stop

@section('content')

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">{{ $brand->name }}</h3>
            </div>
            <br>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Productos</th>
                            <th>Categorías</th>
                            <th style="width: 20%">Stock</th>
                        </tr>
                        @foreach ( $products as $product )
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>@if ( $product->stock == 1) Si @else No @endif</td>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop