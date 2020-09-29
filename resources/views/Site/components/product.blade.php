	<div class="agile_top_brands_grids">
		@foreach ( $products as $product )
			<div class="col-md-{{$colmd}} top_brand_left-1" style="margin-top: 40px;">
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
										<a href="{{Route('siteDetailProduct', $product->slug_name)}}">
										@if ( $product->photo != null )
											<img width="150" height="150" alt="{{$product->photo}}" src="/storage/images/products/{{$product->photo}}" title="@if (count($product->presentations) === 1) Ver detalle @else Ver más presentaciones @endif"></a>
										@else
											<img width="150" height="150" alt="" src="/site/images/logo-roble.jpg" title="@if (count($product->presentations) === 1) Ver detalle @else Ver más presentaciones @endif"></a>
										@endif	
											<p class="card-text">{{ Str::limit($product->name, 40) }}</p>
											<p style="margin-top:0px; font-weight:bold;">{{$product->brand->name}}</p>
										@if ( $stars ?? '' )
											<div class="stars">
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
											</div>
										@endif
										@if ( $product->stock == 0 )
											<h4 style="font:solid; color:red; text-align:center;">SIN STOCK!</h4>
										@else
											<h4>$ {{ $product->price }} <span>@if ($product->promo_price != '') $ {{$product->promo_price}} @endif</span></h4>
										@endif
									</div>			
									<div class="snipcart-details top_brand_home_details">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart">
												<input type="hidden" name="add" value="1">
												<input type="hidden" name="business" value=" ">
												<input type="hidden" name="item_name" value="{{ $product->name }}">
												<input type="hidden" name="amount" value="{{ $product->price }}">
												<input type="hidden" name="currency_code" value="ARS">
												<input type="hidden" name="return" value=" ">
												<input type="hidden" name="cancel_return" value=" ">
												<input type="hidden" name="shipping" value="{{ $product->id }}">
												<input type="hidden" name="shipping2" value="@foreach ( $product->presentations as $presentation ) @if ( $presentation['main'] ) {{ $presentation['presentation'] }}@endif @endforeach">
												<input type="submit" name="submit" value="Agregar al carro" class="button" style="width:110%;">
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