@extends('adminlte::page')

@section('title', "Orders")

@section('content_header')
    
@stop

@section('content')
    
    <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Pedidos</h3>
        <br>
        <div><a href="/admin/categories/add"><button style="font:white;" class="btn-success"><i class="fa fa-plus"></i>Agregar</button></a>
        <a href=""><button class="btn-primary"><i class="fa fa-download"></i>Exportar</button></a></div>
        </div>
        <br>
        <button onclick="status('pendiente');" class="btn-danger">Pendientes</button>
        <button onclick="status('armado');" class="btn-warning">Armados</button>
        <button onclick="status('entregado');" class="btn-primary">Entregados</button>
        <br>
        <br>
            <div class="box-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <p>Corrige los siguientes errores:</p>
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>N°</th>
                        <th>Cliente</th>
                        <th>Cel</th>
                        <th>Dirección</th>
                        <th>Medio de Pago</th>
                        <th>Fecha/hs</th>
                        <th>Estado</th>
                        <th style="width: 20%">Acción</th>
                    </tr>          
                    @foreach ( $orders as $order)
                    @if ( $order->status == $status )
                    <tr>
                        <td>{{ $order->id }}</td>    
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->cel }}</td>
                        <td>{{ $order->address }}</td>    
                        <td>{{ $order->payment_method }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->status }}</td>
                        <td><a href="/admin/orders/edit/{{ $order->id }}"><span class="badge bg-green">Editar</span></a>
                        <a href="/admin/orders/detail/{{ $order->id }}"><span class="badge bg-blue">Ver</span></a>
                        <a href="/admin/orders/delete/{{ $order->id }}"><span class="badge bg-red">Eliminar</span></a></td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>     
            </table>
            </div>
            <div class="box-footer clearfix">
                {!! $links !!}
            </div>
    </div>

@stop

@section('css')

@stop

@section('js')
    <script>
    
    function status(status)
    {
        $status = status;
    }

    </script>
@stop

   