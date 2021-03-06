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
                    <span>Slide</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Agregar</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Crear Slide
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
                                    <form action="{{ url('admin_slides/postSlide') }}" method="post" class="horizontal-form" enctype="multipart/form-data">
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
                                                    <div class="">
                                                        <label class="control-label">Imagen</label>
                                                        <input type="file" id="image" name="img" class="" placeholder="Seleccionar archivo">
                                                        @if ($errors->has('img'))
                                                            <span class="help-block"><strong>{{ $errors->first('img') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Titulo</label>
                                                        <input type="text" id="caption" name="caption" class="form-control" placeholder="Titulo">
                                                        @if ($errors->has('caption'))
                                                            <span class="help-block"><strong>{{ $errors->first('caption') }}</strong></span>
                                                        @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Lista</label>
                                                        <input type="text" id="list" name="list" class="form-control" placeholder="Lista de elementos">
                                                        @if ($errors->has('list'))
                                                            <span class="help-block"><strong>{{ $errors->first('list') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Botón</label>
                                                        <input type="text" id="button" name="button" class="form-control" placeholder="Texto en el botón">
                                                        @if ($errors->has('button'))
                                                            <span class="help-block"><strong>{{ $errors->first('button') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Link</label>
                                                        <input type="text" id="link" name="link" class="form-control" placeholder="Link a la página...">
                                                        @if ($errors->has('link'))
                                                            <span class="help-block"><strong>{{ $errors->first('link') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <label class="control-label">Texto</label>
                                                        <textarea id="text" name="text" class="form-control" placeholder="Texto"></textarea>
                                                        @if ($errors->has('text'))
                                                            <span class="help-block"><strong>{{ $errors->first('text') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>

                                                <!--/span-->
                                            </div>

                                        </div>
                                        <div class="form-actions right">
                                            <button type="button" onclick="redirect_slides();" class="btn default">Cancelar</button>
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
        $("#litree-home").addClass('active');
        $("#li-slides").addClass('active');
        // Redirect
        // Redirect
        function redirect_slides(){
            window.location="{{URL::to('admin_slides')}}";
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
