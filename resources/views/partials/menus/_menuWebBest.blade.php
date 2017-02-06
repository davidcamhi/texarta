<!-- 
	Top Nav 
	
	AVAILABLE CLASSES:
	submenu-dark = dark sub menu
-->

@if (Route::getCurrentRoute()->uri() == '/')

    <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">

@endif

<div class="navbar-collapse pull-right nav-main-collapse collapse">
	<nav class="nav-main">
		<!--
			NOTE
			
			For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
			Direct Link Example: 

			<li>
				<a href="#">HOME</a>
			</li>
		-->
		<ul id="topMain" class="nav nav-pills nav-main">
			<li id="li_home" class="dropdown"><!-- HOME -->
				<a class="" href="{{ url('/') }}">
					INICIO
				</a>
			</li>
			
			<li id="li_productos" class="dropdown"><!-- FEATURES -->
				<a class="dropdown-toggle" href="#">
					PRODUCTOS
				</a>
				<ul class="dropdown-menu">
					<li id="li_todos"><a href="{{ url('lista-productos') }}"><i class="et-layers"></i> POR LÍNEA</a></li>
					<li id="li_color"><a href="{{ url('colores') }}"><i class="et-paintbrush"></i> POR COLOR</a></li>
				</ul>
			</li>
			
			<li class="dropdown"><!-- PAGES -->
				<a class="" href="#">
					CATÁLOGO
				</a>
			</li>
			<li id="li_contacto" class="dropdown"><!-- PAGES -->
				<a class="dropdown-toggle" href="#">
					CONTACTO
				</a>
				<ul class="dropdown-menu">
					<li id="li_mensaje"><a href="{{ url('mensajes/create') }}"><i class="et-envelope"></i> MENSAJE</a></li>
					<li id="li_cotiza"><a href="{{ url('cotizacion/create') }}"><i class="et-wallet"></i> COTIZACIÓN</a></li>
					<li id="li_muestra"><a href="{{ url('muestras/create') }}"><i class="et-ribbon"></i> MUESTRA</a></li>
				</ul>
			</li>
		</ul>

	</nav>
</div>