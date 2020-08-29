@extends('Site/layout')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')

<div>
    <div id="offers" class="newproducts-w3agile">
        <h3 style="text-align:center;">Finalizar compra</h3>
    </div>
    <br>
    <form role="form" id="checkoutForm" name="checkoutForm" method="post" action="{{Route('cartSendOrder')}}" style="margin-right:80px; margin-left:80px;">
    @csrf
        <label>Nombre completo</label>
        <input class="form-control" type="text" placeholder="Nombre Apellido">
        <br>
        <label>Dirección de envío</label>
        <input class="form-control" type="text" placeholder="Calle n°, Localidad, aclaraciones">
        <br>
        <label>Celular</label>
        <input class="form-control" type="text" placeholder="011 155 555 5555">
        <br>
        <div class="form-group">
                  <label>Seleccionar Medio de pago</label>
                  <select class="form-control">
                    <option>Efectivo</option>
                    <option>Mercado Pago</option>
                    <option>Transferencia bancaria</option>
                  </select>
                </div>
        <br>
        <div class="form-group">
            <label>Tu opinión nos importa!</label>
            <textarea class="form-control" rows="4" placeholder="Dejanos un mensaje ..."></textarea>
        </div>
        <button type="submit" class="btn btn-success">Finalizar</button>
        <br>
        <br>
    </form>
</div>

    	
@stop

@section('css')
    
@stop

@section('js')
	<script> 
	</script>
@stop