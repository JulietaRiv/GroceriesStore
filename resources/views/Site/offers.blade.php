<!-- new -->
<div id="offers" class="newproducts-w3agile">
		<div class="container">
			<h3>Ofertas</h3>
				<div class="agile_top_brands_grids">
					@foreach ( $offer_products as $offer_product )
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="site/images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img title=" " alt=" " src="site/images/14.png"></a>		
												<p>{{ $offer_product->name }}</p>
													<h4>{{ $offer_product->price }} <span>{{ $offer_product->promo_price }}</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="{{ $offer_product->name }}">
														<input type="hidden" name="amount" value="{{ $offer_product->price }}">
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
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //new -->