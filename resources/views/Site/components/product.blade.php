	<div class="agile_top_brands_grids">
		@foreach ( $products as $product )
			<div class="col-md-{{$colmd}} top_brand_left-1">
				<div class="hover14 column">
					<div class="agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid_pos">
							@if ($product->offer == 1)<img style="width:27px;" src="/site/images/rebaja.png" title="Oferta" class="img-responsive">@endif
							@if ($product->organic == 1)<img style="width:30px;" src="/site/images/organicos.png" title="Organicos"  class="img-responsive">@endif
							@if ($product->agroecological == 1)<img style="width:30px;" src="/site/images/agroecologicos.png" title="Agroecologicos" class="img-responsive">@endif
							@if ($product->celiacs == 1)<img style="width:30px;" src="/site/images/celiacs.png" title="Sin tacc" class="img-responsive">@endif
							@if ($product->vegan == 1)<img style="width:30px;" src="/site/images/veganos.png" title="Veganos" class="img-responsive">@endif
						</div>
						<div class="agile_top_brand_left_grid1">
						<figure>
							<div class="snipcart-item block">
								<div class="snipcart-thumb">
									<a href="{{Route('siteDetailProduct', $product->slug_name)}}"><img title="" alt="{{$product->name}}" src="site/images/14.png"></a>		
									<p>{{ $product->name }} - {{ $product->main_presentation }}</p>
									@if ( $stars ?? '' )
										<div class="stars">
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
											<i class="fa fa-star blue-star" aria-hidden="true"></i>
										</div>
									@endif
										<h4>{{ $product->price }} <span>{{ $product->promo_price }}</span></h4>
								</div>
								<div class="snipcart-details top_brand_home_details">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="presentation" value="{{ $product->main_presentation }}">
											<input type="hidden" name="item_name" value="{{ $product->name }}">
											<input type="hidden" name="amount" value="{{ $product->price }}">
											<input type="hidden" name="id" value="{{ $product->id }}">
											<input type="hidden" name="cancel_return" value=" ">
											<input type="submit" name="submit" value="Agregar al carro" class="button">
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
		<div class="clearfix"> </div>
		{!! $products->links() !!}
	</div>