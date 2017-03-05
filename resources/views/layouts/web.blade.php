<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		@yield('meta')

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="/css/web_page/essentials.css" rel="stylesheet" type="text/css" />
		<link href="/css/web_page/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<!-- PAGE LEVEL SCRIPTS -->
		<link href="/css/web_page/header-1.css" rel="stylesheet" type="text/css" />
		<link href="/css/web_page/darkblue.css" rel="stylesheet" type="text/css" id="color_scheme" />
		@yield('styles')
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">
		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">
					<!-- right -->
					<ul class="top-links list-inline pull-right">
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="/images/web_page/flags/mx.png" width="16" height="11" alt="lang" /> ESPAÑOL</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="/images/web_page/flags/us.png" width="16" height="11" alt="lang" /> INGLÉS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="/images/web_page/flags/mx.png" width="16" height="11" alt="lang" /> ESPAÑOL</a></li>
							</ul>
						</li>	
					</ul>

					<!-- left -->
				</div>
			</div>
			<!-- /Top Bar -->
			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class=" header-md sticky clearfix">

				<!-- TOP NAV -->
				<header id="topNav" >
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Buscar" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Buscar</button>
											</span>
										</div>
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->
						</ul>
						<!-- /BUTTONS -->

						<!-- Logo -->
						<a class="logo pull-left" href="{{ url('/') }}">
							<img src="/images/web_page/logo_texarta.png" alt="" />
						</a>
						@include('partials.menus._menuWebBest')

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			
			
			@yield('breadcrumbs')
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				 @yield('content')
				
			</section>
			<!-- / -->



<!-- FOOTER -->
			<footer id="footer">
				<div class="copyright">
					<div class="container">
						<ul class="list-inline inline-links mobile-block pull-right nomargin">
							<li><a href="{{ url('/') }}">Inicio</a></li>
							<li><a href="{{ url('lista-productos') }}">Productos</a></li>
							<li><a href="#">Catálogo</a></li>
							<li><a href="{{ url('mensaje') }}">Contacto</a></li>
						</ul>
						&copy; Todos los derechos reservados, Texarta
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->
		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '/plugins/';</script>
		<script type="text/javascript" src="/js/web_page/jquery-2.2.3.min.js"></script>


		<script type="text/javascript" src="/js/web_page/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<!--<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>-->

		@yield('scripts')
	</body>
</html>