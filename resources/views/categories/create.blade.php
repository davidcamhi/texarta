@extends('layouts.app')

@section('styles')
    <!-- DatePicker -->
    <link rel="stylesheet" href="/plugins/datePicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="/plugins/datePicker/css/bootstrap-datepicker3.standalone.css">
@stop

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
	            <span>Líneas</span>
	             <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <span>Crear nueva</span>
	        </li>
	    </ul>
	</div>
	<!-- END PAGE BAR -->
	<!-- BEGIN PAGE TITLE-->
	<h3 class="page-title"> Crear Línea
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
	                            <form action="{{ url('lineas/postCategory') }}" method="post" class="horizontal-form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                                <div class="form-body">
	                                    <h3 class="form-section">Información</h3>
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Nombre</label>
	                                                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre">
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
	                                                <textarea class="form-control" name="description" placeholder="Descripción de la línea."></textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                                    @endif
	                                                <!--<span class="help-block"> This field has error. </span>-->
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>
	                                </div>
	                                <div class="form-actions right">
	                                    <button type="button" onclick="redirect_categories();" class="btn default">Cancelar</button>
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
    $("#li-categories").addClass('active');
    // Redirect
      // Redirect
    function redirect_categories(){
        window.location="{{URL::to('lineas')}}";
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
