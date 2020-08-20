
<div class="products">
	<div class="container">
		<div class="agileinfo_single">		
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="images/si1.jpg" alt=" " class="img-responsive">
            </div>
				<div class="col-md-8 agileinfo_single_right">
				<h2>{{ $product->name }}</h2>
					<div class="w3agile_description">
						<h4>Descripción:</h4>
						<p>{{ $product->description }}</p>
					</div>
                    @foreach ( $presentations as $presentation )
                    {{ $presentation->presentation }}
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">$ {{ $presentation->price }} <span>$ {{ $presentation->promo_price }}</span></h4>
						</div>
                        {{ $presentation->presentation }}
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="">
									<input type="hidden" name="amount" value="">
									<input type="hidden" name="return" value="">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>
					</div>
                    @endforeach
				</div>
				<div class="clearfix"> </div>
        </div>
    </div>
</div>
