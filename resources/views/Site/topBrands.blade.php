<!-- top-brands -->
<div id="highlightedProducts" class="top-brands">
	<div class="container">
		<h2>Destacados</h2>				
			
@php 
$stars = true;
$products = $highlighted_products;
$colmd = 4;
@endphp
@include('Site/components/product')

	</div>
</div>
<!-- //top-brands -->
