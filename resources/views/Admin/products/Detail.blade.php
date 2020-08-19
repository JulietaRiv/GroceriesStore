@extends('adminlte::page')

@section('title', "Products")

@section('content_header')
   
@stop

@section('content')

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Producto:  {{ $product->name }}</h3>
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <ul>
                            <!-- /aca va la foto -->
                            <li>Categoría: {{ $product->category->name }}</li>
                            <li>Marca: {{ $product->brand->name }}</li>
                            <li>Precio: $ {{ $product->price }}</li>
                            <li>Precio promo: $ {{ $product->promo_price }}</li>
                            <li>Descripción: {{ $product->description }}</li>
                            <li>Stock: {{ $product->stock  == 1 ? 'Si' : 'No' }}</li>
                            <li>Oferta: {{ $product->offer  == 1 ? 'Si' : 'No' }}</li>
                            <li>Destacado: {{ $product->highlighted  == 1 ? 'Si' : 'No' }}</li>
                            <li>Sin Tacc: {{ $product->celiacs  == 1 ? 'Si' : 'No' }}</li>
                            <li>Orgánico: {{ $product->organic  == 1 ? 'Si' : 'No' }}</li>
                            <li>Agroecológico: {{ $product->agroecological  == 1 ? 'Si' : 'No' }}</li>
                            <li>Vegano: {{ $product->vegan  == 1 ? 'Si' : 'No' }}</li>
                            <li>Activo: {{ $product->active  == 1 ? 'Si' : 'No' }}</li>
                            <!-- /aca va las presentaciones -->
                        </ul>
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