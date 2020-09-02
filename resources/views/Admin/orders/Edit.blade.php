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
            <br>
        </form>
    </div>
    <div style="padding-right:3%;" class="col-md-6">
        <div id="offers" class="newproducts-w3agile">
            <h3 style="text-align:center;">Items</h3>
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
                                <td style="text-align:right;"><input style="width:40px;" type="text" id="units" value="{{ $item['quantity'] }},{{$item['product_id']}}" name="quantity"/></td>
                                <td style="text-align:right;" value="{{ $item['unit_price'] }}" name="unit_price">${{ $item['unit_price'] }}</td>
                                <td style="text-align:right;" value="{{ $item['price'] }}" name="price">${{ $item['price'] }}</td>
                                <td value="{{$item['product_id']}}" id="deleteItem"><span class="badge bg-red">Eliminar</span></td>
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
                    <br>
                    <br>
                    <label>
                        <input type="checkbox">  &nbsp Armado
                    </label>
                    <br>
                    <label>
                        <input type="checkbox">  &nbsp Entregado
                    </label>
                </div>
            </div>      
    </div>  
    <br>
    <button onclick="" type="button" class="btn btn-success">Guardar</button>
</div>
<br>
<br>
<br>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    $("#deleteItem").onchange = function()
    {   
        let newItems = [];
        items.forEach(function(item){
            if (item['product_id'] != $("#deleteItem").val()){
                newItems.push(item);
            }
        })
        items = newItems;
        recalculate(items);
    };

    $("#units").onchange = function()
    {
        let units = $("#units").val().slice(0, ',');
        let prod_id =  $("#units").val().slice(',');
        items.forEach(function(item){
            if (item['product_id'] == prod_id){
                item['quantity'] = units; 
                item['price'] = units * item['unit_price'];
            }
        })
        recalculate(items);
    };

    function recalculate(items)
    {
        //volver a renderizarlo y a calcular el total de unidades y de precio
    }

    </script>
@stop