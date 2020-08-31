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
        <form role="form" id="checkoutForm" name="checkoutForm" method="post" action="{{Route('cartSendOrder')}}" style="margin-right:80px; margin-left:80px;">
        @csrf
            <label>Nombre completo</label>
                <input name="completeName" class="form-control" type="text" placeholder="Nombre Apellido">
            <br>
            <label>Dirección de envío</label>
                <input name="adress" class="form-control" type="text" placeholder="Calle n°, Localidad, aclaraciones">
            <br>
            <label>Celular</label>
                <input name="cel" class="form-control" type="text" placeholder="011 155 555 5555">
            <br>
            <div class="form-group">
                <label>Seleccionar Medio de pago</label>
                    <select name="payment_method" class="form-control">
                        <option>Efectivo</option>
                        <option>Mercado Pago</option>
                        <option>Transferencia bancaria</option>
                    </select>
            </div>
            <br>
            <div class="form-group">
                <label name="message">Tu opinión nos importa!</label>
                    <textarea class="form-control" rows="4" placeholder="Dejanos un mensaje ..."></textarea>
            </div>
            <input id="closeOrderList" name="closeOrderList" type="hidden"/>
            <button type="submit" class="btn btn-success">Finalizar</button>
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
                                <th>Precio</th>
                            </tr>
                        </thead>  
                        <tbody>
                            @foreach ( $items as $item )
                            <tr>    
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>{{ $item['price'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Precio final</td>
                                <td></td>
                                <td>unejemplo</td>
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
            
            $("#closeOrderList").val(JSON.stringify(items));
            Swal.fire({
            title: "Muchas gracias por tu compra!",
            text: "Proximamente nos estaremos contactando con vos.",
            confirmButtonText: "Ok", 
            closeOnConfirm: true,
          });
            paypal.minicart.reset();
        }
	</script>
@stop