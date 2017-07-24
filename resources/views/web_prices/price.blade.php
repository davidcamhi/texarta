@extends('layouts.web')
@section('meta')
	<meta charset="utf-8" /> 
	<title>Cotización | Texarta</title>
	<meta name="keywords" content="Texarta, telas, mexico, mexicanas, calidad, textiles, mobiliario, butacas, empresa" />
	<meta name="description" content="Texarta es una empresa mexicana de telas para mobiliario y butacas. " />
	<meta name="Author" content="Texarta" />

	<!-- mobile settings -->
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
@endsection
@section('styles')
	<!--PAGE STYLES -->
@endsection
@section('breadcrumbs')
<section class="page-header page-header-xs">
	<div class="container">

		<h1>COTIZACIÓN</h1>

		<!-- breadcrumbs -->
		<ol class="breadcrumb" style="position:relative;margin-top:5px;">
			<li><a href="{{ URL('/') }}">Inicio</a></li>
			<li>Contacto</li>
			<li class="active">Cotización</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->

<!-- 
	PAGE MENU 
	
	AVAILABLE CLASSES:
		.page-menu-light
		.page-menu-dark
		.page-menu-transparent
		.page-menu-color
		
		.noborder - optional - used for .page-menu-transparent
-->
<div id="page-menu" class="page-menu-color noborder">
	<div class="container">

		<nav class="pull-right"><!-- page menu -->
			<button id="page-menu-mobile" class="fa fa-bars"></button>
			<!-- 
				.menu-scrollTo - for scrollto page menu / no external links 
			-->
			<ul class="list-inline">
				<li><a href="{{ url('mensajes/create') }}">Mensaje</a></li>
				<li class="active">Cotización</li>
				<li><a href="{{ url('muestras/create') }}">Muestra</a></li>
			</ul>
		</nav><!-- /page menu -->

	</div>
</div>
		<!-- /PAGE MENU -->
@endsection
@section('content')

<div class="container">

	<div class="row">

		<!-- FORM -->
		<div class="col-md-9 col-sm-9">
			@if($info->main_text)
				<h3>{{ $info->main_text }}</h3>
			@endif
			@if($info->text2)
				<h4>{{ $info->text2 }}</h4>
			@endif
			@if($info->text3)
				<h4>{{ $info->text3 }} </h4>
			@endif

			<!--
				MESSAGES
				
					How it works?
					The form data is posted to php/contact.php where the fields are verified!
					php.contact.php will redirect back here and will add a hash to the end of the URL:
						#alert_success 		= email sent
						#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
						#alert_mandatory	= email not sent - required fields empty
						Hashes are handled by assets/js/contact.js

					Form data: required to be an array. Example:
						contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
						Also, add `required` to input fields if is a mandatory field. 
						Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

					PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
								 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

					WARNING! Do not change the `email` and `name`!
								contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
								contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
			-->

			<div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
              </div> <!-- end .flash-message -->
             @if (count($errors) > 0)
                <!-- Alert Mandatory -->
                <div class="alert alert-warning margin-bottom-30"><!-- WARNING -->
                    <strong>Error!</strong> Revisa los campos obligatorios.
                </div>
            @endif


			<form action="{{ url('cotizacion/postPrice') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="row">
						<div class="form-group">
							<div class="col-md-5">
								<label for="name">Nombre *</label>
								<input type="text" value="" class="form-control" name="name" id="name">
                                @if ($errors->has('name'))
                                    <span style="color:red!important" class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                @endif
							</div>
							<div class="col-md-7">
								<label for="email">E-mail *</label>
								<input type="email" value="" class="form-control" name="email" id="email">
                                @if ($errors->has('email'))
                                    <span style="color:red!important" class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-7">
								<label for="company">Compañía</label>
								<input type="text" value="" class="form-control" name="company" id="company">
							</div>
							<div class="col-md-5">
								<label for="tel">Tel</label>
								<input type="text" value="" class="form-control" name="tel" id="tel">
							</div>
						</div>
					</div>
                
                    <div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label for="category_id">Línea</label>
								{!! Form::select('category_id', $categories, null,  ['class' => 'form-control']) !!}
                                @if ($errors->has('category_id'))
                                    <span class="help-block"><strong>{{ $errors->first('category_id') }}</strong></span>
                                @endif
							</div>
							<div class="col-md-6">
								<label for="color_id">Color</label>
								{!! Form::select('color_id', $colors, null,  ['class' => 'form-control']) !!}
                                @if ($errors->has('color_id'))
                                    <span class="help-block"><strong>{{ $errors->first('color_id') }}</strong></span>
                                @endif
							</div>
						</div>
					</div>
                    <div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label for="quantity">Cantidad</label>
								<input type="number" class="form-control" name="quantity" id="quantity">
							</div>
							<div class="col-md-6">
								<label for="unit">Unidad</label>
								<select class="form-control pointer" name="unit">
									<option value="metros">Metros</option>
									<option value="pies">Pies</option>
									<option value="yardas">Yardas</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label for="message">Comentarios</label>
								<textarea  maxlength="10000" rows="8" class="form-control" name="comments" id="comments"></textarea>
							</div>
						</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> ENVIAR COTIZACIÓN</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /FORM -->


		<!-- INFO -->
		<div class="col-md-3 col-sm-3">
			@if($info->title1)
				<h2>{{ $info->title1 }}</h2>
			@endif

			@if($info->text_title)
				<p>
					{{ $info->text_title }}
				</p>
			@endif
			<hr />

			<p>
				@if($info->address)<span class="block"><strong><i class="fa fa-map-marker"></i> Dirección:</strong> {{ $info->address }}</span>@endif
				@if($info->phone)<span class="block"><strong><i class="fa fa-phone"></i> Teléfono:</strong> <a href="tel:1800-555-1234">{{ $info->phone }}</a></span>@endif
				@if($info->email)<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:{{ $info->email }}">{{ $info->email }}</a></span>@endif
			</p>

			<hr />
			@if($info->title2)
				<h4 class="font300">{{ $info->title2 }}</h4>
			@endif
			@if($info->text_title2)
				<p>
					<span class="block">{!! $info->text_title2 !!} </span>
				</p>
			@endif
		</div>
		<!-- /INFO -->
	</div>
</div>
@endsection
@section('scripts')
	<!-- PAGE LEVEL SCRIPTS -->
    <script>
        $("#li_contacto").addClass('active');
        $("#li_cotiza").addClass('active');
    </script>
@endsection