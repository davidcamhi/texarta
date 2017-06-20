@extends('layouts.web')
@section('meta')
	<meta charset="utf-8" /> 
	<title>Texarta | Lista de productos</title>
	<meta name="keywords" content="HTML5,CSS3,Template" />
	<meta name="description" content="" />
	<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

	<!-- mobile settings -->
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
@endsection
@section('styles')
	<link href="/css/web_page/layout-shop.css" rel="stylesheet" type="text/css" />
	<link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
	<!--<link href="/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />-->
@endsection
@section('breadcrumbs')
<section class="page-header page-header-md parallax parallax-1" id="parallax_texarta" style="">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
	<div class="container">
		<h1>PRODUCTOS</h1>
		<!-- breadcrumbs -->
		<ol class="breadcrumb" style="position:relative;margin-top:5px;">
			<li><a href="{{ URL('/') }}">Inicio</a></li>
			<li class="active">Productos</li>
		</ol><!-- /breadcrumbs -->
	</div>		
</section>
	
@endsection
@section('content')
	<div class="container">
		<div class="row text-center">
            <div class=" col-lg-12 col-sm-12"><a href="{{ url('colores') }}" style=""><button class="btn btn-primary btn-lg">Buscar por color</button></div></a>
        </div>
		<div class="row">
            
			<!-- RIGHT -->
			<div class="col-lg-12 col-md-12 col-sm-12">

                @foreach($categories as $category)
                
				    <h1 style="margin: 0 0 20px 0;">{{ $category->name }}</h1>
                    <div class="text-center">
                        <div class="owl-carousel owl-padding-3 controlls-over" data-plugin-options='{"singleItem": false, "items": "4", "autoPlay": false, "navigation": true, "pagination": false}'>
                            @foreach($products as $product)
                                @if($product->category_id == $category->id)
                                 <div class="item">
                                    <div class="">
                                        <div style="overflow: hidden" class="thumbnail">
                                            <!-- product image(s) -->
                                            <a class="shop-item-image" href="{{ url('lista-productos/'.$product->id)  }}">
                                                <img style="min-height:269px; max-height:269px;transform:scale(1.3,1.3);" class="img-responsive" src="{{ asset('/images/web_page/products/'.$product->image) }}" alt="shop first image" />
                                            </a>
                                            <!-- /product image(s) -->
                                        </div>

                                        <div class="shop-item-summary text-center">
                                            <h2>{{ $product->name }}</h2>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <a href="{{ url('linea/'.$category->id)  }}" style=""><button class="btn btn-md btn-primary">Ver todos</button></a>
                    </div>
				    <hr />
				@endforeach
			</div>
		</div><br>
        <div class="row text-center">
            <div class=" col-lg-12 col-sm-12"><a href="{{ url('colores') }}" style=""><button class="btn btn-primary btn-lg">Buscar por color</button></div></a>
        </div>
	</div>
@endsection
@section('scripts')
	<!-- PAGE LEVEL SCRIPTS -->
	<script type="text/javascript" src="/js/web_page/demo.shop.js"></script>
	<script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.js"></script>
    <script>
        $("#li_productos").addClass('active');
        $("#li_todos").addClass('active');
    </script>
@endsection