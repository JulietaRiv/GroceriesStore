@extends('Site/layout')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')

<div id="offers" class="newproducts-w3agile">
		<div class="container">
			<h3>Productos {{ $title['title'] }} @if ($title['type_icon'] != 0)<img style="width:50px;" src="/site/images/{{$title['type_icon']}}" alt=""/>@endif</h3>
            <br>
			
@include('Site/components/orderProducts&Items')

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
	<script> 
	</script>
@stop