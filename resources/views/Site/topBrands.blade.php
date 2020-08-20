<!-- top-brands -->
<div id="highlightedProducts" class="top-brands">
		<div class="container">
		<h2>Destacados</h2>				
			<div class="agile_top_brands_grids">
				@foreach ( $highlighted_products as $highlighted_product )
				<div class="col-md-4 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href="products.html"><img title=" " alt=" " src="images/7.png" /></a>		
											<p>{{ $highlighted_product->name }} - {{ $highlighted_product->main_presentation }}</p>
											<div class="stars">
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
											</div>
											<h4>{{ $highlighted_product->price }}<span>{{ $highlighted_product->promo_price }}</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="{{ $highlighted_product->name }}" />
													<input type="hidden" name="amount" value="{{ $highlighted_product->price }}" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
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
		</div>
</div>
<!-- //top-brands -->
