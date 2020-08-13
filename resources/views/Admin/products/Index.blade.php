@extends('adminlte::page')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')
    
    <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Productos</h3>
        <br>
        <h4><a href="/admin/products/add"><span class="badge bg-green">Agregar +</span></a></h4>
        </div>  
        <br>
            <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Orgánico</th>
                    <th>Sin Tacc</th>
                    <th>Agroecológico</th>
                    <th>Ofertas</th>
                    <th>Destacados</th>
                    <th style="width: 10%">Acción</th>
                </tr>
                @foreach ( $products as $product )
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->brand->name }}</td>
                    <td>{{ $product->price }}</td>   
                    @if ( $product->organic == 1 )
                    <td>No</td>@else<td>Si</td>
                    @endif
                    @if ( $product->for_celiacs == 1 )
                    <td>No</td>@else<td>Si</td>
                    @endif 
                    @if ( $product->agroecological == 0 )
                    <td>No</td>@else<td>Si</td>
                    @endif
                    @if ( $product->offer == 0 )
                    <td>No</td>@else<td>Si</td>
                    @endif
                    @if ( $product->highlighted == 0 )
                    <td>No</td>@else<td>Si</td>
                    @endif
                    <td><a href="/admin/products/edit/{{ $product->id }}"><span class="badge bg-green">Editar</span></a>
                    <a href="/admin/products/view/{{ $product->id }}"><span class="badge bg-blue">Ver</span></a>
                    <a href="/admin/products/delete/{{ $product->id }}"><span class="badge bg-red">Eliminar</span></a></td>
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

   