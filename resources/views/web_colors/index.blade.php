@extends('layouts.web')
@section('meta')
	<meta charset="utf-8" /> 
	<title>Colores | Texarta</title>
	<meta name="keywords" content="HTML5,CSS3,Template" />
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
<section class="page-header page-header-md parallax parallax-3" id="parallax_texarta" style="">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
	<div class="container">
		<h1>COLORES</h1>
        
		<!-- breadcrumbs -->
		<ol class="breadcrumb" style="position:relative;margin-top:5px;">
			<li><a href="{{ URL('/') }}">Inicio</a></li>
			<li class="active">Colores</li>
		</ol><!-- /breadcrumbs -->

	</div>		
</section>
	
@endsection
@section('content')
	<div class="container">
		
		<div class="row">
			<!-- RIGHT -->
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="row clients-dotted list-inline">
                    @foreach($colors as $color)
                    <li class="col-md-3 col-sm-3 col-xs-6">
                        <a href="{{ url('colores/'.$color->name) }}">
                            <h4>{{ $color->name }}</h4>
                            <img style="min-height:200px; max-height:200px;" class="img-responsive" src="{{ asset('/images/web_page/colors/'.$color->image) }}" alt="{{ $color->name  }}">
                        </a>
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
    <script>
        $("#li_productos").addClass('active');
        $("#li_color").addClass('active');
    </script>
@endsection