@extends('Site/layout')

@section('title', "Products")

@section('content_header')
    
@stop

@section('content')


<div class="products">
	<div class="container">
		<div class="agileinfo_single">		
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="images/si1.jpg" alt=" " class="img-responsive">
            </div>
				<div class="col-md-8 agileinfo_single_right">
				<h2>{{ $product->name }}</h2>
				<br>
					<div class="w3agile_description">
						<h4>Descripción:</h4>
						<p>{{ $product->description }}</p>
					</div>
					<br>
					<h4>Presentaciones:</h4>
					<br>
                    @foreach ( $presentations as $presen )
                    * {{ $presen['presentation'] }}
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">$ {{ $presen['price'] }} <span></span></h4>
						</div>         
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="item_name" value="{{ $product->id }}-{{ $product->name }}-" @if (count($presentations) > 1) "{{ $presen['presentation'] }}" @else "{{ $product->main_presentation }}" @endif>
									<input type="hidden" name="amount" value="{{ $presen['price'] }}">
									<input type="submit" name="submit" value="Agregar al carro" class="button">
								</fieldset>
							</form>
						</div>
					</div>
					<br>
                    @endforeach
				</div>
				<div class="clearfix"> </div>
        </div>
    </div>
</div>
@stop

@section('css')
   
@stop

@section('js')
    <script> </script>
@stop
