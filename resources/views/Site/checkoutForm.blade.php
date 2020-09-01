@extends('Site/layout')

@section('title', "Products")

@section('content_header')
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@stop

@section('content')

<div class="row">
    <div class="col-md-6">
        <div id="offers" class="newproducts-w3agile">
            <h3 style="text-align:center;">Finalizar compra</h3>
        </div>
        <br>
        <form role="form" id="checkoutForm2" name="checkoutForm2" method="post" action="{{Route('cartSendOrder')}}" style="margin-right:80px; margin-left:80px;">
        @csrf
            <label>Nombre completo</label>
                <input value="{{ old('name') }}" name="name" class="form-control" type="text" placeholder="Nombre Apellido">
            <br>
            <label>Dirección de envío</label>
                <input value="{{ old('adress') }}" name="adress" class="form-control" type="text" placeholder="Calle n°, Localidad, aclaraciones">
            <br>
            <label>Celular</label>
                <input valsue="{{ old('cel') }}" name="cel" class="form-control" type="text" placeholder="011 155 555 5555">
            <br>
            <div class="form-group">
                <label>Seleccionar Medio de pago</label>
                    <select name="payment_method" class="form-control">
                        <option >Efectivo</option>
                        <option>Mercado Pago</option>
                        <option>Transferencia bancaria</option>
                    </select>
            </div>
            <br>
            <div class="form-group">
                <label>Tu opinión nos importa!</label>
                    <textarea value="{{ old('message') }}" name="message" class="form-control" rows="4" placeholder="Dejanos un mensaje ..."></textarea>
            </div>
            <input id="closeOrderList" name="closeOrderList" type="hidden"/>
            <input id="cmd" name="cmd" value="false" type="hidden"/>
            <button onclick="sendOrder();" type="button" class="btn btn-success">Finalizar</button>
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
                            @foreach ( $itemsList as $item )
                            @php
                            $total += {{ $item['price'] }}
                            @endphp
                            <tr>    
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>{{ $item['unitPrice'] }}</td>
                                <td>{{ $item['price'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Precio final</td>
                                <td></td>
                                <td>{{ $total }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>      
    </div>
</div>
    	
@stop

@section('css')
    
@stop

@section('js')
	<script> 
        function thanksForPurchase()
        {
            Swal.fire({
            title: "Muchas gracias por tu compra!",
            text: "Proximamente nos estaremos contactando con vos.",
            confirmButtonText: "Ok", 
            closeOnConfirm: true,
          });
            paypal.minicart.reset();
        }

        function sendOrder()
        {
            //$("#closeOrderList").val(JSON.stringify($itemsList));
            $.ajax({
                type:'POST',
                url: "{{Route('cartSendOrder')}}",      
                data : $('#checkoutForm2').serialize()
            }).done(function(response) {
                console.log('ok');
                document.body.innerHTML = response;
            });
        }

	</script>
@stop