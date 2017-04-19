<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Texarta | Home</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="/css/web_page/essentials.css" rel="stylesheet" type="text/css" />
		<link href="/css/web_page/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="/css/web_page/header-1.css" rel="stylesheet" type="text/css" />
		<link href="/css/web_page/darkgreen.css" rel="stylesheet" type="text/css" id="color_scheme" />
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
			<div id="header" class="transparent clearfix"style="border-bottom: 0px!important;">
         <!-- Top Bar -->
                    <div id="topBar" style="background-color: rgba(0,0,0,0.3);!important" class="transparent">
                        <div class="container translucent">
                            <!-- right -->
                            <ul class="top-links list-inline pull-right">
                                <li>
                                    <a class="dropdown-toggle no-text-underline" style="color:#fff;" data-toggle="dropdown" href="#"><img class="flag-lang" src="/images/web_page/flags/mx.png" width="16" height="11" alt="lang" /> ESPAÑOL</a>
                                    <ul class="dropdown-langs dropdown-menu">
                                        <li><a tabindex="-1" href="#"><img class="flag-lang" src="images/web_page/flags/us.png" width="16" height="11" alt="lang" /> INGLÉS</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="#"><img class="flag-lang" src="/images/web_page/flags/mx.png" width="16" height="11" alt="lang" /> ESPAÑOL</a></li>
                                    </ul>
                                </li>	
                            </ul>

                            <!-- left -->
                        </div>
                    </div>
                    <!-- /Top Bar -->
				<!-- TOP NAV -->
				<header id="topNav">
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
							<img src="/images/web_page/logo_texarta_light.png" alt="" />
						</a>
						@include('partials.menus._menuWebBest')
					</div>
				</header>
				<!-- /Top Nav -->

			</div>



			<!-- REVOLUTION SLIDER -->
			<section id="slider" class="slider fullwidthbanner-container roundedcorners">
				<!--
					Navigation Styles:
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				
				<div class="fullscreenbanner" data-navigationStyle="">
					<ul class="hide">
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="10" data-saveperformance="off" data-title="Slide title 1" data-thumb="/images/web_page/10-min.jpg">

							<img src="/images/web_page/1x1.png" data-lazyload="/images/web_page/slides/{{ $slides[0]->img }}" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

							<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>
							<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<span class="weight-300">TELAS / DISEÑO / COLORES / PATRONES</span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="255"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								TEXARTA
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="345"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="433"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<a href="#purchase" class="btn btn-default btn-lg">
									<span>Nuestros Productos</span> 
								</a>
							</div>

						</li>

						<!-- SLIDE  -->
						<li data-transition="boxfade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 2" data-thumb="/images/web_page/24-min.jpg">

							<img src="/images/web_page/1x1.png" data-lazyload="/images/web_page/slides/{{ $slides[1]->img }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="110" />

							<div class="tp-caption very_large_text lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-100"
								data-y="center" data-voffset="-100"
								data-speed="600"
								data-start="800"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn">
								RUN WILD
							</div>

							<div class="tp-caption medium_light_white lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-110"
								data-y="center" data-voffset="10"
								data-speed="600"
								data-start="900"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn">
								Happiness is an accident of nature,<br/>
								a beautiful and flawless aberration.<br/>
								<span style="font-size:24px;font-weight:400;">&ndash; Pat Conroy</span>
							</div>
						</li>

						<!-- SLIDE -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="/images/web_page/10-min.jpg'">

							<img src="/images/web_page/1x1.png" data-lazyload="/images/web_page/slides/{{ $slides[2]->img }}" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

							<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>
							<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<span class="weight-300">DEVELOPMENT / MARKETING / DESIGN / PHOTO</span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="255"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								TELAS DE CALIDAD
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="345"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="433"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<a style="font-size:20px;" href="#purchase" class="btn btn-default btn-lg">
									<span>LÍNEAS</span>
								</a>
							</div>

						</li>

					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</section>
			<!-- /REVOLUTION SLIDER -->



			<!-- FOOTER -->
			<footer id="footer">
				<div class="copyright">
					<div class="container">
						<ul class="list-inline inline-links mobile-block pull-right nomargin">
							<li><a href="{{ url('/') }}">INICIO</a></li>
							<li><a href="{{ url('lista-productos') }}">PRODUCTOS</a></li>
							<li><a href="#">CATÁLOGO</a></li>
							<li><a href="{{ url('mensaje') }}">CONTACTO</a></li>
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
		<script type="text/javascript">var plugin_path = '../texarta/public/plugins/';</script>
		<script type="text/javascript" src="/js/web_page/jquery-2.2.3.min.js"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="/js/web_page/demo.revolution_slider.js"></script>

		<!-- SCRIPTS -->
		<script type="text/javascript" src="/js/web_page/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<!--<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>-->
	</body>
    <script>
        $("#li_home").addClass('active');
    </script>
</html>