<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> 
//addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/site/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/site/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="/site/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="/site/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/site/js/move-top.js"></script>
<script type="text/javascript" src="/site/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@yield('css')
@yield('js')
<!-- start-smoth-scrolling -->
</head>
<body>
<!-- header -->
<div class="agileits_header">
		<div class="container">
			<div class="product_list_header">  
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button id="view-cart" class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><img style="width:30px;" alt="Hace tu pedido" src="/site/images/whatsapp-color.png"/> Hace tu pedido: (+011) 153-505-1213</li>
					<br><br><li><img style="width:24px;" alt="Seguinos" src="/site/images/instagram-color.png"/>&nbsp Seguinos <a href="https://www.instagram.com/elroblenatural/?hl=es"  target="_blank">@elroblenatural</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<a href="/"><img style="width:200px;" src="/site/images/logo2-roble.png" alt="El Roble"/></a>
			</div>
			<div class="w3l_search">
				<form id="searchForm" action="{{Route('siteProducts', ['search', 'q'])}}" method="get">
					<input value="{{$search ?? ''}}" type="search" name="search" placeholder="Buscar..." >
					<button type="submit"  class="btn btn-default search" aria-label="Left Align">
						<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
					<div class="clearfix"></div>
				</form>
			</div>		
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">				
						<li><a href="/#highlightedProducts">Destacados</a></li>	
						<li><a href="/#aboutUs">Nosotros</a></li>
						<li><a href="/#offers">Ofertas</a></li>
						<li><a href="{{route('siteProducts', ['category' , 'conservas-y-untables'])}}">Categorías</a></li>
						<li><a href="{{route('siteProducts', ['type', 'organic'])}}">Orgánicos</a></li>
						<li><a href="{{route('siteProducts', ['type', 'agroecological'])}}">Agroecológicos</a></li>
						<li><a href="{{route('siteProducts', ['type', 'celiacs'])}}">Sin Tacc</a></li>
						<li><a href="{{route('siteProducts', ['type', 'vegan'])}}">Veganos</a></li>
						<li><a href="/#contact">Contacto</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>	
<!-- //navigation -->
<div id="content">
@yield('content')
</div>
<!-- //footer -->
<div id="contact" class="footer">
	<div class="container">
		<div class="w3_footer_grids">
			<div class="col-md-6 w3_footer_grid">
				<h3>Contacto</h3>			
				<ul class="address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Martínez, San Isidro, Buenos Aires<span></span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:ventaelroble@gmail.com">ventaelroble@gmail.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>(+011) 153-505-1213 &nbsp; <img style="width:20px;" src="/site/images/whatsapp-bn.svg"/>  &nbsp @elroblenatural  &nbsp; <img style="width:20px;" src="/site/images/instagram-bn.png"/></li>
				</ul>
			</div>
			<div class="col-md-6 w3_footer_grid">
				<h3></h3>
				<ul class="info"> 
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#highlightedProducts">Destacados</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#aboutUs">Nosotros</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#offers">Ofertas</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('siteProducts', ['category', 'conservas-y-untables'])}}">Categorías</a></li>
				</ul>
			</div>			
		</div>
	</div>	
	<div class="footer-copy">		
		<div class="container">
			<p>© 2020 Catálogo Tienda Almacen. All rights reserved | Design by <a href="">JRivDev</a></p>
		</div>
	</div>		
</div>	
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="/site/js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/							
			$().UItoTop({ easingType: 'easeOutQuart' });							
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="/site/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '/checkout',
		strings: {
			button: 'Finalizar compra @csrf',
			buttonAlt: "Enviar pedido",
		}
	});
	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
	@if(session()->has('success'))
	thanksForPurchase();
    @endif
	//gracias x tu compra!
	function thanksForPurchase()
{
    Swal.fire({
    title: "Muchas gracias por tu compra!",
    text: "Nos estaremos contactando con vos.",
    confirmButtonText: "Ok", 
    closeOnConfirm: true,
    });
    paypal.minicart.reset();
}
</script>
<!-- main slider-banner -->
<script src="/site/js/skdslider.min.js"></script>
<link href="/site/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});		
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>