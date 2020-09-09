@extends('Site/layout')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')

	<div id="offers" class="newproducts-w3agile">
		<div class="container">
		<h3>{{ $title['title'] }} @if ($title['type_icon'] !== 0)<img style="width:50px;" src="/site/images/{{$title['type_icon']}}" alt=""/>@endif</h3>
		<br>

@include('Site/components/orderItems')
@if ( $colmd == 4 )

	<div class="col-md-4 products-left">
		<div class="categories">
			<h2>Categorías</h2>		
				<ul>
					@foreach ( $categories as $category )
					<li><a href="{{route('siteProducts', ['category', $category->slug_name])}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{ $category->name }}</a></li>
					@endforeach
				</ul>
		</div>																																												
	</div>
	<div class="col-md-8 products-right">
@else
	<div class="col-md-12 products-right">
@endif
@include('Site/components/product')

	</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	
@stop

@section('css')
    
@stop

@section('js')
	<script> </script>
@stop