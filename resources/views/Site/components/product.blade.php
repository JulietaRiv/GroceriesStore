<div class="agile_top_brands_grids">
					@foreach ( $products as $product )
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									@if ($product->offer == 1)<img src="/site/images/offer.png" alt=" " class="img-responsive">@endif
									@if ($product->organic == 1)<img style="width:30px;" src="/site/images/organicos.jpg" alt=" " class="img-responsive">@endif
									@if ($product->agroecological == 1)<img style="width:30px;" src="/site/images/agroecologicos.png" alt=" " class="img-responsive">@endif
									@if ($product->celiacs == 1)<img style="width:30px;" src="/site/images/celiacs.png" alt=" " class="img-responsive">@endif
									@if ($product->vegan == 1)<img style="width:30px;" src="/site/images/veganos.jpg" alt=" " class="img-responsive">@endif
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href=""><img title=" " alt=" " src="site/images/14.png"></a>		
												<p>{{ $product->name }} - {{ $product->main_presentation }}</p>
													<h4>{{ $product->price }} <span>{{ $product->promo_price }}</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="{{ $product->name }}">
														<input type="hidden" name="amount" value="{{ $product->price }}">
														<input type="hidden" name="return" value=" ">
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
				</div>