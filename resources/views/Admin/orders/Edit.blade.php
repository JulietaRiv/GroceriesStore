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
                        <tbody id="itemsList">
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Precio final</td>
                                <td style="text-align:right;" id="total_units"></td>
                                <td></td>
                                <td style="text-align:right; font-weight:bold;" id="total_price"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <br>
                    <br>
                    <div class="form-group">
                        <label>Estado</label>
                        <select class="form-control">
                            <option>Pendiente</option>
                            <option>Armado</option>
                            <option>Entregado</option>
                        </select>
                </div>
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
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script>

    window.onload = function () {
        renderItems();
    }

    @if ($order->items != '')
    let items = {!! json_encode($order->items) !!};
    @else 
    let items = [];
    @endif

    function deleteItem(index)
    {
        items.splice(index, 1);
        renderItems();
    }

    function quantity(index, quantity)
    {
        items[index]['quantity'] = quantity;
        renderItems();
    }

    function renderItems()
    {
        let total_price2 = 0;
        let total_units = 0;
        let html = "";
        items.forEach(function(item, i){
            item['price'] = item['quantity'] * item['unit_price'];
            total_price2 += item['price'];
            total_units += item['quantity'] * 1;
            html += `
        <tr>   
            <td>${ item['name'] }</td>
            <td style="text-align:right;"><input style="width:40px;" type="text" id="units" onchange="quantity(${i}, this.value);" value="${ item['quantity'] }"/></td>
            <td style="text-align:right;">${ item['unit_price'] }</td>
            <td style="text-align:right;">${ item['price'] }</td>
            <td><a href="javascript:void deleteItem(${i});" ><span class="badge bg-red">Eliminar</span></a></td>
        </tr>           
        `;
        });
        $("#itemsList").html(html);
        $("#total_price").html(total_price2);
        $("#total_units").html(total_units);
        console.log(total_price2);
    }

    </script>
@stop