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
	            <span>Usuarios</span>
	             <i class="fa fa-circle"></i>
	        </li>
	        <li>
	            <span>Editar</span>
	        </li>
	    </ul>
	</div>
	<!-- END PAGE BAR -->
	<!-- BEGIN PAGE TITLE-->
	<h3 class="page-title"> Editar Usuario
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
                                {!! Form::model($user, ['method' => 'PATCH', 'action' =>  ['UsersController@update', $user->id],'enctype' => 'multipart/form-data'] ) !!}
                                    <input type="hidden" name="_method" value="PATCH" />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="password" value="{{ $user->password }}">
                                    
	                                <div class="form-body">
	                                    <h3 class="form-section">Información Personal</h3>
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Nombre</label>
	                                                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
	                                                <!--<span class="help-block"> This is inline help </span>-->
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                         <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">e-mail</label>
	                                                <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}">
	                                                <!--<span class="help-block"> This field has error. </span>-->
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label class="control-label">Privilegios</label>
	                                                <input type="number" id="privilege" name="privilege" class="form-control" value="{{ $user->privilege }}">
	                                                <!--<span class="help-block"> This is inline help </span>-->
	                                            </div>
	                                        </div>
	                                        <!--/span-->
	                                    </div>

	                                  
	                                </div>
	                                <div class="form-actions right">
	                                    <button type="button" onclick="redirect_user();" class="btn default">Cancelar</button>
	                                    <button type="submit" class="btn blue"><i class="fa fa-check"></i> Editar</button>
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
    $("#li-users").addClass('active');
</script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/js/datatable.min.js" type="text/javascript"></script>
<script src="/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/plugins/datePicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/js/form-samples.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- DatePicker -->
<script src="/plugins/datePicker/js/bootstrap-datepicker.js"></script>
<script src="/plugins/datePicker/locales/bootstrap-datepicker.es.min.js"></script>
<script>
    // Redirect
    function redirect_user(){
        window.location="{{URL::to('usuarios')}}";
    }
</script>
@endsection
