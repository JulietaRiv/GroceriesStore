@extends('adminlte::page')

@section('title', "Orders")

@section('content_header')
    
@stop

@section('content')
    
    <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Pedidos</h3>
        <br>
        <h4><a href="/admin/categories/add"><span class="badge bg-green">Agregar +</span></a></h4>
        </div>  
            <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>N°</th>
                    <th>Cliente</th>
                    <th>Cel</th>
                    <th>Dirección</th>
                    <th>Medio de Pago</th>
                    <th>Armado</th>
                    <th>Entregado</th>
                    <th style="width: 20%">Acción</th>
                </tr>
                @foreach ( $orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>    
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->cel }}</td>
                    <td>{{ $order->address }}</td>    
                    <td>{{ $order->payment_method }}</td>
                    <td></td>
                    <td></td>
                    <td><a href="/admin/orders/edit/{{ $order->id }}"><span class="badge bg-green">Editar</span></a>
                    <a href="/admin/orders/detail/{{ $order->id }}"><span class="badge bg-blue">Ver</span></a>
                    <a href="/admin/orders/delete/{{ $order->id }}"><span class="badge bg-red">Eliminar</span></a></td>
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

@stop

@section('js')
    <script> </script>
@stop

   