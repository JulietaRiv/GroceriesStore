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
							<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Filtrar/ ordenar</option>
                                <option value="null">Orgánicos</option>
                                <option value="null">Agroecológicos</option> 
                                <option value="null">Sin Tacc</option>
                                <option value="null">Veganos</option>
								<option value="null">Ordenar por precio</option>								
							</select>
						</div>
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Items por página 9</option>
								<option value="null">Items por página 18</option> 
								<option value="null">Items por página 32</option>					
								<option value="null">All</option>								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
                </div>
               
				<div class="agile_top_brands_grids">
                @foreach ( $products as $product )

                <div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="single.html"><img title=" " alt=" " src="images/17.png"></a>		
												<p>{{ $product->name }}</p>
												<h4>{{ $product->price }} <span>{{ $product->promo_price }}</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="{{ $product->name }}">
														<input type="hidden" name="amount" value="{{$product->price}}">				
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>                
				@endforeach
                </div>              
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