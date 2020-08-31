@extends('adminlte::page')

@section('title', "Productos")

@section('content_header')

<script src="/admin/js/products_presentations.js"></script>

@stop

@section('content')


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Stock</h3>
        <br>
    </div>
    <br>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <tbody>
                    <tr>
                        <th>Nombre</th>
                        <th>Presentación</th>
                        <th>Stock</th>
                        <th>Estado</th>
                    </tr>
                    @foreach ( $products as $product )                
                    @foreach ( $product->presentations as $productPresentation )
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $productPresentation['presentation'] }}</td>
                        <td>{{ $productPresentation['stock'] }}</td>
                        <td>@if ($productPresentation['stock'] <= 3)<span class="badge bg-red">- 3</span>@endif
                        @if ($productPresentation['stock'] > 3 & $productPresentation['stock'] < 10) <span class="badge bg-yellow">5 - 10</span>@endif
                        @if ($productPresentation['stock'] >= 10) <span class="badge bg-green">+ 10</span>@endif</td>
                        @endforeach
                    @endforeach
                    </tr>
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

@stop