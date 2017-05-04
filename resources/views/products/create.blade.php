@extends('layouts.app')

@section('styles')
    <!-- DatePicker -->
    <link rel="stylesheet" href="/plugins/datePicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="/plugins/datePicker/css/bootstrap-datepicker3.standalone.css">
@stop
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
    tinymce.init({
        selector: '#description',
        theme: 'modern',
        height: 200,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
    });
</script>
@section('content')
<div class="page-content">
	<!-- BEGIN PAGE BAR -->
	<div class="page-bar">
	    <ul class="page-breadcrumb">
	        <li>
	            <a href="index.html">Home</a>
	            <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <span>Productos</span>
	             <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <span>Agregar</span>
	        </li>
	    </ul>
	</div>
	<!-- END PAGE BAR -->
	<!-- BEGIN PAGE TITLE-->
	<h3 class="page-title"> Crear Producto
	    <small>nuevo</small>
	</h3>
	<!-- END PAGE TITLE-->
	<!-- END PAGE HEADER-->
	<div class="row">
	    <div class="col-md-12">
	        <div class="tabbable-line boxless tabbable-reversed">
	            <div class="tab-content">
	                <div class="tab-pane active" id="tab_1">
	                    
	                    <div class="portlet light bordered">
	                        <div class="portlet-body form">
	                            <!-- BEGIN FORM-->
	                            <form action="{{ url('productos/postProduct') }}" method="post" class="horizontal-form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                                <div class="form-body">
	                                    <h3 class="form-section">Información</h3>
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Nombre</label>
	                                                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre del producto">
                                                    @if ($errors->has('name'))
                                                        <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                                    @endif
	                                                <!--<span class="help-block"> This is inline help </span>-->
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                         <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Descripción</label>
													<textarea id="description" name="description" class="form-control" >{{ old('description') }}</textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                                    @endif
	                                                <!--<span class="help-block"> This field has error. </span>-->
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>
                                        <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Línea</label>
	                                                {!! Form::select('category_id', $categories, null,  ['class' => 'form-control']) !!}
                                                    @if ($errors->has('category_id'))
                                                        <span class="help-block"><strong>{{ $errors->first('category_id') }}</strong></span>
                                                    @endif
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                         <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Color</label>
	                                                {!! Form::select('color_id', $colors, null,  ['class' => 'form-control']) !!}
                                                    @if ($errors->has('color_id'))
                                                        <span class="help-block"><strong>{{ $errors->first('color_id') }}</strong></span>
                                                    @endif
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>
                                        <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Fibra</label>
	                                                <input type="text" id="fiber" name="fiber" class="form-control" placeholder="Fibra">
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                         <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Tejido</label>
	                                                <input type="text" id="fabric" name="fabric" class="form-control" placeholder="Tejido">
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>
                                        <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Peso</label>
	                                                <input type="text" id="weight" name="weight" class="form-control" placeholder="Peso">
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                         <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Ancho</label>
	                                                <input type="text" id="width" name="width" class="form-control" placeholder="Ancho">
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>
                                        <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Backing</label>
	                                                <input type="text" id="backing" name="backing" class="form-control" placeholder="Backing">
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                         <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Patrón</label>
	                                                <input type="text" id="pattern" name="pattern" class="form-control" placeholder="Patrón">
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>
                                         <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Disponible</label>
	                                                <select class="form-control" id="available" name="available">
                                                        <option value="1">Si</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                    @if ($errors->has('available'))
                                                        <span class="help-block"><strong>{{ $errors->first('available') }}</strong></span>
                                                    @endif
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                         <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Principal</label>
	                                                <select class="form-control" id="main" name="main">
                                                        <option value="1">Si</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                    @if ($errors->has('main'))
                                                        <span class="help-block"><strong>{{ $errors->first('main') }}</strong></span>
                                                    @endif
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>
                                        <div class="row">
                                            <div class="col-md-6">
	                                            <div class="">
	                                                <label class="control-label">Imagen</label>
	                                                <input type="file" id="image" name="image" class="" placeholder="Seleccionar archivo">
                                                    @if ($errors->has('image'))
                                                        <span class="help-block"><strong>{{ $errors->first('image') }}</strong></span>
                                                    @endif
	                                                <!--<span class="help-block"> This is inline help </span>-->
	                                            </div>
	                                        </div>
                                        </div>
	                                </div>
	                                <div class="form-actions right">
	                                    <button type="button" onclick="redirect_products();" class="btn default">Cancelar</button>
	                                    <button type="submit" class="btn blue"><i class="fa fa-check"></i> Agregar</button>
	                                </div>
	                            </form>
	                            <!-- END FORM-->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	</div>
	<!-- END CONTENT BODY -->
                

@endsection
<!-- END CONTENT BODY -->
@section('scripts')
<script>
    $("#li-products").addClass('active');
    // Redirect
      // Redirect
    function redirect_products(){
        window.location="{{URL::to('productos')}}";
    }

</script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/js/datatable.min.js" type="text/javascript"></script>
<script src="/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/plugins/datePicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/js/form-samples.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->



@endsection
