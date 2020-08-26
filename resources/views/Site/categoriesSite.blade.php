@extends('Site/layout')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')

<div id="categoriesSite" class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Categorías</h2>		
                        <ul>
                            @foreach ( $categories as $category )
                            <li><a href="{{route('siteCategories', $category->slug_name)}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right">

@include('Site/components/orderProducts&Items')
				
@php 
$colmd = 4;
@endphp
@include('Site/components/product')

				<nav class="numbering">
					<ul class="pagination paging">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">«</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">»</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop