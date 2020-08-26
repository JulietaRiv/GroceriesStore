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
   			  <div class="products-right-grid">
				<div class="products-right-grids">
					<div class="sorting">
						<select id="country" name="order" onchange="javascript:handleSelect(this)" class="frm-field required sect">
							<option selected value="precio_desc">Ordenar por menor precio</option>
							<option value="precio_asc">Ordenar por mayor precio</option>
							<option value="alf_a">Ordenar por A-Z</option>
						</select>
					</div>
					<div class="sorting-left">
						<select id="country2" name="items" onchange="javascript:handleSelelect(this)" class="frm-field required sect">
							<option value="items9">Items por página 9</option>
							<option value="items18">Items por página 18</option> 
							<option value="items32">Items por página 32</option>					
							<option value="itemsTodos">Todo</option>								
						</select>
					</div>
            		<div class="clearfix"> </div>
        		</div>
    		  </div> 
				
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
    <script>

		function handleSelect(elm)
		{
			
		}

	</script>
@stop