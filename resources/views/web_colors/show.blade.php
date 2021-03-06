@extends('layouts.web')
@section('meta')
	<meta charset="utf-8" /> 
	<title>{{ $color->name }} | Texarta</title>
	<meta name="keywords" content="Texarta, telas, mexico, mexicanas, calidad, textiles, mobiliario, butacas, empresa" />
	<meta name="description" content="Texarta es una empresa mexicana de telas para mobiliario y butacas. " />
	<meta name="Author" content="Texarta" />
	<!-- mobile settings -->
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
@endsection
@section('styles')
	<link href="/css/web_page/layout-shop.css" rel="stylesheet" type="text/css" />
@endsection
@section('breadcrumbs')
<section class="page-header page-header-xsm parallax parallax-3" id="parallax_texarta" style="">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
	<div class="container">
		<h1>{{ $color->name }}</h1>
	<br>
		<!-- breadcrumbs -->
		<ol class="breadcrumb" style="position:relative; margin-top:5px;">
			<li><a href="#">Inicio</a></li>
			<li class="active"><a href="{{ url('colores') }}">Colores</a></li>
			<li class="active">{{ $color->name }}</li>
		</ol><!-- /breadcrumbs -->

	</div>		
</section>
	
@endsection
@section('content')
	<div class="container">
		
		<div class="row">
			<!-- RIGHT -->
			<div class="col-lg-12 col-md-12 col-sm-12">
	
				<ul class="shop-item-list row list-inline nomargin">
	
					<!-- ITEM -->
                    @foreach($products as $product)
                      <li class="col-lg-3 col-sm-4">
	
						<div class="shop-item">
	
							<div class="thumbnail" style="overflow: hidden;">
								<!-- product image(s) -->
								<a class="shop-item-image" href="{{ url('producto/'.$product->category_id.'/'.$product->name) }}">
									<img style="min-height:260px; max-height:260px;transform:scale(1.3,1.3)" class="img-responsive" src="{{ asset('/images/web_page/products/'.$product->image) }}" alt="{{ $product->name }}" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>{{ $product->name }}</h2>
							</div>
						</div>
	
					</li>  
                        
                    @endforeach
					
					
				</ul>
				<hr />
				<div class="text-center"><a href="{{ url('lista-productos') }}"><button type="button" class="btn btn-primary btn-xlg">Todos los productos</button></a></div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	<!-- PAGE LEVEL SCRIPTS -->
	<script type="text/javascript" src="/js/web_page/demo.shop.js"></script>
@endsection