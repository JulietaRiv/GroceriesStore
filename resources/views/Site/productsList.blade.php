@extends('Site/layout')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')

<div id="offers" class="newproducts-w3agile">
		<div class="container">
			<h3>Productos {{ $type }} <img style="width:50px;" src="/site/images/{{$type_icon}}" alt=""/></h3>
            <br>
                <div class="products-right-grid">
					<div class="products-right-grids">
						<div class="sorting">
							<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
								<option selected value="precio_desc">Ordenar por menor precio</option>
								<option value="precio_asc">Ordenar por mayor precio</option>
								<option value="alf_a">Ordenar por A-Z</option>
							</select>
						</div>
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="">Items por página 9</option>
								<option value="">Items por página 18</option> 
								<option value="">Items por página 32</option>					
								<option value="">Todo</option>								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
                </div>       

@php 
$colmd = 3;
@endphp
@include('Site/components/product')

		</div>
	</div>
	
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop