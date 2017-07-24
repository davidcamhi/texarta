@extends('layouts.web')
@section('meta')
	<meta charset="utf-8" />
	<title>Producto | Texarta</title>
	<meta name="keywords" content="Texarta, telas, mexico, mexicanas, calidad, textiles, mobiliario, butacas, empresa" />
	<meta name="description" content="Texarta es una empresa mexicana de telas para mobiliario y butacas. " />
	<meta name="Author" content="Texarta" />

	<!-- mobile settings -->
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
@endsection
@section('styles')
	<link href="/css/web_page/layout-shop.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
@endsection
@section('breadcrumbs')
	<section class="page-header page-header-xs" style="background-color: rgba(208, 239, 143, 0.3); padding: 10px 0 10px 0;">
		<div class="container">
	
			<h1>{{ $product->category->name }} {{ $product->name }}</h1>
	
			<!-- breadcrumbs -->
			<ol class="breadcrumb" style="position:relative;margin-top:5px;">
				<li><a href="{{ URL('/') }}">Inicio</a></li>
				<li><a href="{{ URL('lista-productos') }}">Productos</a></li>
				<li class="active">{{ $product->name }}</li>
			</ol><!-- /breadcrumbs -->
	
		</div>	
	</section>
@endsection
@section('content')
	<div class="container">
					
		<div class="row">
		
			<!-- IMAGE -->
			<div class="col-lg-5 col-sm-4">
				
				<div class="thumbnail relative margin-bottom-3">

					<!-- 
						IMAGE ZOOM 
						
						data-mode="mouseover|grab|click|toggle"
					-->
					<figure style="overflow: hidden;" id="zoom-primary" class="zoom" data-mode="click">
						<!-- 
							zoom buttton
							
							positions available:
								.bottom-right
								.bottom-left
								.top-right
								.top-left
						-->
						<a class="lightbox bottom-right" href="{{ asset('/images/web_page/products/'.$product->image) }}" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>
						<!-- 
							image 
							
							Extra: add .image-bw class to force black and white!
						-->
						<img style="transform:scale(1.3,1.3)" class="img-responsive" src="{{ asset('/images/web_page/products/'.$product->image) }}" width="1200" height="1500" alt="This is the product title" />
					</figure>
				</div>
				<!-- Thumbnails (required height:100px) -->
				<!--<div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured" data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
					<a class="thumbnail active" href="">
						<img src="" height="100" alt="" />
					</a>
					<a class="thumbnail" href="">
						<img src="" height="100" alt="" />
					</a>
					<a class="thumbnail" href="">
						<img src="" height="100" alt="" />
					</a>
				</div>
				<!-- /Thumbnails -->

			</div>
			<!-- /IMAGE -->
			<!-- ITEM DESC -->
			<div class="col-lg-7 col-md-7 col-sm-8">
				<!-- buttons -->
				<div class="pull-right">
					<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
					<!--<a class="btn btn-default add-compare" href="#" data-item-id="1" data-toggle="tooltip" title="Cotizar"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>-->
				</div>
				<!-- /buttons -->

				<!--<hr />-->	
				<h2 style="margin:0 0 0 0!important;">{{ $product->category->name }} {{ $product->name }}</h2>

				<div class="clearfix">
                    @if($product->available == 1)
                        <span class="pull-right text-success"><i class="fa fa-check"></i> Disponible</span>
                    @else
                        <span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> No disponible</span>
                    @endif
					
					<!--
					<span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> Out of Stock</span>
					-->
				</div>


				<!-- short description 
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<!-- /short description -->
				<ul id="myTab" class="nav nav-tabs nav-top-border" role="tablist">
					<li role="presentation" class="active"><a href="#specs" role="tab" data-toggle="tab">Características</a></li>
					<li role="presentation" ><a href="#description" role="tab" data-toggle="tab">Descripción</a></li>
					
				</ul>
		
		
				<div class="tab-content padding-top-20">
					<!-- SPECIFICATIONS -->
					<div role="tabpanel" class="tab-pane fade in active" id="specs">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Característica</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                        @if($product->fiber)
								            <td>Fibra</td>
                                            <td>{{ $product->fiber }}</td>
                                        @endif
									</tr>
									<tr>
                                         @if($product->fabric)
                                            <td>Tejido</td>
										  <td>{{ $product->fabric }}</td>
                                        @endif
									</tr>
									<tr>
                                        @if($product->weight)
								            <td>Peso</td>
								            <td>{{ $product->weight }}</td>
                                        @endif
									</tr>
									<tr>
										@if($product->width)
								            <td>Ancho</td>
								            <td>{{ $product->width }}</td>
                                        @endif
									</tr>
									<tr>
										@if($product->backing)
								            <td>Backing</td>
								            <td>{{ $product->backing }}</td>
                                        @endif
									</tr>
									<tr>
										@if($product->pattern)
								            <td>Patrón</td>
								            <td>{{ $product->pattern }}</td>
                                        @endif
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- DESCRIPTION -->
					<div role="tabpanel" class="tab-pane fade in" id="description">
						{!! $product->description !!}
					</div>
					
					
					
				</div>

				<!-- countdown 
				<div class="text-center">
					<h5>Oferta limitada</h5>
					<div class="countdown" data-from="January 31, 2018 15:03:26" data-labels="years,months,weeks,days,hour,min,sec"></div>
				</div>
				<!-- /countdown -->
				<hr />
				<!-- FORM -->
				<!--<form class="clearfix form-inline nomargin" method="" action="">
					<input type="hidden" name="product_id" value="1" />-->
					<center><a href="{{ url('cotizacion/create') }}"><button style="margin-left:25%;" class="btn btn-primary pull-left noradius">COTIZAR</button></a>
					<a href="{{ url('mensajes/create') }}"><button style="margin-left:30px;margin-right:30px;" class="btn btn-primary pull-left  noradius">MENSAJE</button></a>
					<a href="{{ url('muestras/create') }}"><button style="" class="btn btn-primary pull-left  noradius">MUESTRA</button></a></center>
				<!--</form>
				<!-- /FORM -->
				<hr />
				<!-- Share 
				<div class="pull-right">
					<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>

				</div>
				<!-- /Share -->

			</div>
			<!-- /ITEM DESC -->

			<!-- INFO 
			<div class="col-sm-4 col-md-3">

				<h4 class="size-18">
					<i class="fa fa-paper-plane-o"></i> 
					COTIZA EN LÍNEA
				</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla.</p>

				<h4 class="size-18">
					<i class="fa fa-clock-o"></i>
					RESPUESTA RÁPIDA
				</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla.</p>

				<h4 class="size-18">
					<i class="fa fa-users"></i> 
					SERVICIO AL CLIENTE
				</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla.</p>

				<hr>
			</div>
			<!-- /INFO -->

		</div>


		<!--<hr class="margin-top-80 margin-bottom-80" />-->


		<!-- RELATED -->
		<h2 class="owl-featured"><strong>Otros</strong> colores:</h2>
		<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "items": "5", "stopOnHover":false, "autoPlay":4500, "autoHeight": false, "navigation": true, "pagination": false}'>

			@foreach($others as $other)

			<!-- item -->
			<div class="shop-item nomargin" style="overflow: hidden;">

				<div class="thumbnail">
					<!-- product image(s) -->
					<a class="shop-item-image" href="{{ url('producto/'.$other->category_id.'/'.$other->name)  }} ">
						<img style="transform:scale(1.3,1.3);" class="img-responsive" src="{{ asset('/images/web_page/products/'.$other->image) }}" alt="shop first image" />
					</a>
					<!-- /product image(s) -->

				</div>
			</div>
			<!-- /item -->
			@endforeach
		</div>
		<!-- /RELATED -->

	</div>
@endsection
@section('scripts')
	<!-- PAGE LEVEL SCRIPTS -->
	<script type="text/javascript" src="/js/web_page/demo.shop.js"></script>
    <script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.js"></script>
    <script>
        $("#li_productos").addClass('active');
    </script>
@endsection