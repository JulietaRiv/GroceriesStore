@extends('adminlte::page')

@section('title', "Products")

@section('content_header')

<script src="/admin/js/products_presentations.js"></script>

@stop

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Ofertas</h3>
    </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <tbody>
                    <tr>
                        <th style="width:5">Orden</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                    </tr>
                    @foreach ( $offerProducts as $offerProduct )
                    <tr>
                        <td style="width:5"><input type="checkbox"/></td>
                        <td>{{ $offerProduct->name }}</td>
                        <td>{{ $offerProduct->category->name }}</td>
                        <td>{{ $offerProduct->brand->name }}</td>
                        <td>{{ $offerProduct->price }}</td>
                        <td>{{ $offerProduct->description }}</td>
                        <!-- /aca iria la presentacion en cuestion -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
</div>

@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')

<script>
</script>

@stop