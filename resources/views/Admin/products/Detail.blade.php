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
                            <li>Presentaciones: </li>
                        </ul>
                        <div id="presentationsTable"></div>
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
    <script>
let presentations = [];
        if (presentations.length > 0){
            html = `
<table border='1' style='width:90%';>
    <thead>
        <tr>
            <th>Default</th>
            <th>Presentación</th>
            <th>Precio</th>
            <th>Precio Promo</th>
            <th>Es oferta</th>
            <th>Es destacado</th>
            <th>Stock</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>`;
            presentations.forEach(function(presentation){
                let offer = presentation.offer == true ? 'Si' : 'No';
                let highlighted = presentation.highlighted == true ? 'Si' : 'No';
                //let checked = presentation.main == 1 ? 'checked' : '' ;   <td><input ${ checked } type="radio" name="default"/></td>
                html += `<tr>
                            <td>${ presentation.presentation }</td>
                            <td>${ presentation.price }</td>
                            <td>${ presentation.promo_price }</td>
                            <td>${ offer }</td>
                            <td>${ highlighted  }</td>
                            <td>${ presentation.stock  }</td>
                        </tr>`;
                });
                html += `</tbody></table>`;
        } else {
            html = 'Aun no hay presentaciones cargadas';

    </script>

@stop