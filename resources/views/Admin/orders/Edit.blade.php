@extends('adminlte::page')

@section('title', "Orders")

@section('content_header')
   
@stop

@section('content')



<form role="form" id="orderEdit" name="orderEdit" method="post" action="{{Route('ordersUpdate')}}">
    <div class="row">
        <div class="col-md-6">
            <div id="offers" class="newproducts-w3agile">
                <h3 style="text-align:center;">Editar pedido n° {{ $order->id }}</h3>
            </div>
            <br>
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        <p>Todos los campos son requeridos para finalizar la compra!</p>
                    </ul>
                </div>
            @endif         
            @csrf
                <label>Nombre completo</label>
                    <input value="{{ $order->name }}" name="name2" class="form-control" type="text" placeholder="Nombre Apellido">
                <br>
                <label>Dirección de envío</label>
                    <input value="{{ $order->address }}" name="address2" class="form-control" type="text" placeholder="Calle n°, Localidad, aclaraciones">
                <br>
                <label>Celular</label>
                    <input value="{{ $order->cel }}" name="cel2" class="form-control" type="text" placeholder="011 155 555 5555">
                <br>
                <div class="form-group">
                    <label>Seleccionar Medio de pago</label>
                        <select name="payment_method2" class="form-control">
                            <option value="efectivo" @if ( $order->payment_method == 'efectivo' ) selected @endif>Efectivo</option>
                            <option value="mercadoPago" @if ( $order->payment_method == 'mercadoPago' ) selected @endif>Mercado Pago</option>
                            <option value="transferencia" @if ( $order->payment_method == 'transferencia' ) selected @endif>Transferencia bancaria</option>
                        </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Tu opinión nos importa!</label>
                        <textarea name="message2" class="form-control" rows="4" placeholder="Dejanos un mensaje ...">{{ $order->message }}</textarea>
                </div>
                <br>
        </div>
        <div class="col-md-6">
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
                        <tbody id="itemsList2">
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
                        <select id="status" name="status" class="form-control">
                            <option value="pendiente" @if ( $order->status == 'pendiente' ) selected @endif>Pendiente</option>
                            <option value="armado"  @if ( $order->status == 'armado' ) selected @endif>Armado</option>
                            <option value="entregado"  @if ( $order->status == 'entregado' ) selected @endif>Entregado</option>
                        </select>
                    </div>
                    <input id="totalPrice" name="totalPrice" value="" type="hidden"/>
                    <input id="totalUnits" name="totalUnits" value="" type="hidden"/>
                    <input type="hidden" name="orderId" value="{{ $order->id }}"/>
                    <input type="hidden" id="itemsList" name="itemsList" value=""/>
                </div>
            </div>      
        </div>  
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>

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
            <td style="text-align:right;"><input style="width:40px;" type="text" onchange="quantity(${i}, this.value);" value="${ item['quantity'] }"/></td>
            <td style="text-align:right;">${ item['unit_price'] }</td>
            <td style="text-align:right;">${ item['price'] }</td>
            <td><a href="javascript:void deleteItem(${i});" ><span class="badge bg-red">Eliminar</span></a></td>
        </tr>           
        `;
        });
        $("#itemsList2").html(html);
        $("#total_price").html(total_price2);
        $("#totalPrice").val(total_price2);
        $("#total_units").html(total_units);
        $("#totalUnits").val(total_units);
        $("#itemsList").val(JSON.stringify(items));
    }

    </script>
@stop