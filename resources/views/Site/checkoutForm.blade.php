@extends('Site/layout')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')

<div>
    <div id="offers" class="newproducts-w3agile">
        <h3 style="text-align:center;">Finalizar compra</h3>
        <br>
    </div>
    <br>
    <div style="margin-right:80px; margin-left:80px;">
        <label>Completar dirección de envío</label>
        <input class="form-control" type="text" placeholder="Calle n°, Localidad, aclaraciones">
        <br>
        <label>Completar celular</label>
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
        <br>
    </div>
</div>

    	
@stop

@section('css')
    
@stop

@section('js')
	<script> 
	</script>
@stop