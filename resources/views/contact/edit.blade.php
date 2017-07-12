@extends('layouts.app')

@section('styles')
    <!-- DatePicker -->
    <link rel="stylesheet" href="/plugins/datePicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="/plugins/datePicker/css/bootstrap-datepicker3.standalone.css">
@stop
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
    tinymce.init({
        selector: '#text_title2',
        theme: 'modern',
        height: 50,
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
                    <span>Información de Contacto</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Editar</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Editar Información de Contacto
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
                                    {!! Form::model($contact_info, ['method' => 'PATCH', 'action' =>  ['ContactController@update', $contact_info->id],'enctype' => 'multipart/form-data'] ) !!}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-body">
                                            <h3 class="form-section">Información</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Type</label>
                                                        <input type="text" id="type" name="type" class="form-control" placeholder="Tipo" value="{{ $contact_info->type }}" readonly>
                                                        @if ($errors->has('type'))
                                                            <span class="help-block"><strong>{{ $errors->first('type') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Main Text</label>
                                                        <textarea id="main_text" name="main_text" class="form-control" placeholder="main_text">{{ $contact_info->main_text }} </textarea>
                                                        @if ($errors->has('main_text'))
                                                            <span class="help-block"><strong>{{ $errors->first('main_text') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Text2</label>
                                                        <input type="text" id="text2" name="text2" class="form-control"value="{{ $contact_info->text2 }}" placeholder="text2">
                                                        @if ($errors->has('text2'))
                                                            <span class="help-block"><strong>{{ $errors->first('text2') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Text3</label>
                                                        <input type="text" id="text3" name="text3" class="form-control" value="{{ $contact_info->text3 }}" placeholder="text3">
                                                        @if ($errors->has('text3'))
                                                            <span class="help-block"><strong>{{ $errors->first('text3') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Title1</label>
                                                        <input type="text" id="title1" name="title1" class="form-control" value="{{ $contact_info->title1 }}" placeholder="title1">
                                                        @if ($errors->has('title1'))
                                                            <span class="help-block"><strong>{{ $errors->first('title1') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Text_Title</label>
                                                        <textarea id="text_title" name="text_title" class="form-control" placeholder="text_title">{{ $contact_info->text_title }}</textarea>
                                                        @if ($errors->has('text_title'))
                                                            <span class="help-block"><strong>{{ $errors->first('text_title') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Address</label>
                                                        <input type="text" id="address" name="address" class="form-control" value="{{ $contact_info->address }}" placeholder="address">
                                                        @if ($errors->has('address'))
                                                            <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Phone</label>
                                                        <input type="text" id="phone" name="phone" class="form-control" value="{{ $contact_info->phone }}" placeholder="phone">
                                                        @if ($errors->has('phone'))
                                                            <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input type="text" id="email" name="email" class="form-control" value="{{ $contact_info->email }}" placeholder="email">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Title2</label>
                                                        <input type="text" id="title2" name="title2" class="form-control" value="{{ $contact_info->title2 }}" placeholder="title2">
                                                        @if ($errors->has('title2'))
                                                            <span class="help-block"><strong>{{ $errors->first('title2') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Text Title2</label>
                                                        <input type="text" id="text_title2" name="text_title2" class="form-control" value="{{ $contact_info->text_title2 }}" >
                                                        @if ($errors->has('text_title2'))
                                                            <span class="help-block"><strong>{{ $errors->first('text_title2') }}</strong></span>
                                                    @endif
                                                    <!--<span class="help-block"> This is inline help </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                            <button type="button" onclick="redirect_products();" class="btn default">Cancelar</button>
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
        $("#litree-home").addClass('active');
        $("#li-info").addClass('active');
        // Redirect
        // Redirect
        function redirect_products(){
            window.location="{{URL::to('info_contacto')}}";
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
