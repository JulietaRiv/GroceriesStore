@extends('adminlte::page')

@section('title', "Orders")

@section('content_header')
   
@stop

@section('content')

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Detalle del pedido n° {{$order->id}}</h3>
            </div>
            <br>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>                        
                        <tr>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->address }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->cel }}</td>
                            <td>{{ $order->payment_method }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->comment }}</td>
                        </tr>          
                    </tbody>
                </table>
                <table class="table bordered table-condensed">
                    <thead>
                        <tr>           
                            <th>Items</th>
                            <th>Unidades</th>
                            <th>Precio por unidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>  
                    <tbody>
                        @php
                            $total = 0;
                            $unidades = 0;
                        @endphp
                        @foreach ( $items as $item )
                        @php
                            $total += $item['price'];
                            $unidades += $item['quantity'];
                        @endphp
                        <tr>    
                            <td>{{ $item['name'] }}</td>
                            <td style="text-align:right;">{{ $item['quantity'] }}</td>
                            <td style="text-align:right;">${{ $item['unit_price'] }}</td>
                            <td style="text-align:right;">${{ $item['price'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Precio final</td>
                            <td style="text-align:right;">{{ $unidades }}</td>
                            <td></td>
                            <td style="text-align:right; font-weight:bold;">${{ $total }}</td>
                        </tr>
                    </tfoot>
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