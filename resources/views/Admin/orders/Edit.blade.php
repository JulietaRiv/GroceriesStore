@extends('adminlte::page')

@section('title', "Orders")

@section('content_header')
   
@stop

@section('content')


<div class="row">
    <div class="col-md-6">
        <div id="offers" class="newproducts-w3agile">
            <h3 style="text-align:center;">Editar pedido n° {{ $order->id }}</h3>
        </div>
        <br>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    <p>Todos los campos son requeridos para finalizar la compra!</p>
                </ul>
            </div>
        @endif
        <form role="form" id="orderEdit" name="orderEdit" method="post" action="{{Route('ordersEdit', [$order->id])}}" style="margin-right:80px; margin-left:80px;">
        @csrf
            <label>Nombre completo</label>
                <input value="{{ $order->name }}" name="name" class="form-control" type="text" placeholder="Nombre Apellido">
            <br>
            <label>Dirección de envío</label>
                <input value="{{ $order->address }}" name="address" class="form-control" type="text" placeholder="Calle n°, Localidad, aclaraciones">
            <br>
            <label>Celular</label>
                <input value="{{ $order->cel }}" name="cel" class="form-control" type="text" placeholder="011 155 555 5555">
            <br>
            <div class="form-group">
                <label>Seleccionar Medio de pago</label>
                    <select name="payment_method" class="form-control">
                        <option value="efectivo" @if ( $order->payment_method == 'efectivo' ) selected @endif>Efectivo</option>
                        <option value="mercadoPago" @if ( $order->payment_method == 'mercadoPago' ) selected @endif>Mercado Pago</option>
                        <option value="transferencia" @if ( $order->payment_method == 'transferencia' ) selected @endif>Transferencia bancaria</option>
                    </select>
            </div>
            <br>
            <div class="form-group">
                <label>Tu opinión nos importa!</label>
                    <textarea name="message" class="form-control" rows="4" placeholder="Dejanos un mensaje ...">{{ $order->message }}</textarea>
            </div>
            <input id="cmd" name="cmd" value="false" type="hidden"/>
            <button onclick=";" type="button" class="btn btn-success">Guardar</button>
            <br>
            <br>
        </form>
    </div>
    <div class="col-md-6">
        <div id="offers" class="newproducts-w3agile">
            <h3 style="text-align:center;">Pedido</h3>
        </div>
            <div id="showOrderList">
                <div class="box-body no-padding">
                    <table class="table table-condensed">
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
                                <td style="text-align:right;"><input type="text" value="{{ $item['quantity'] }}" id="quantity" name="quantity"/></td>
                                <td style="text-align:right;" value="{{ $item['unit_price'] }}" id="unit_price" name="unit_price">${{ $item['unit_price'] }}</td>
                                <td style="text-align:right;" value="{{ $item['price'] }}" id="price" name="price">${{ $item['price'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Precio final</td>
                                <td style="text-align:right;" id="total_units">{{ $unidades }}</td>
                                <td></td>
                                <td style="text-align:right; font-weight:bold;" id="total_price">${{ $total }}</td>
                            </tr>
                        </tfoot>
                    </table>
                    <button type="button" onclick="recalculate();" class="btn btn-primary">Recalcular</button>
                </div>
            </div>      
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

        function recalculate()
        {
            $("#price").val() = $("#quantity").val() * $("#unit_price").val();
            $("#total_units").val() = '';
        }

    </script>
@stop