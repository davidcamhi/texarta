@extends('layouts.app')

@section('content')
<!-- BEGIN PAGE TITLE-->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> Calendar
        <small>calendar page</small>
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit bordered calendar">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green sbold uppercase">Calendario</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <!-- BEGIN DRAGGABLE EVENTS PORTLET-->
                            <h3 class="event-form-title margin-bottom-20">Arrastrar eventos</h3>
                            <div id="external-events">
                                <form class="inline-form">
                                    <input type="text" value="" class="form-control" placeholder="Título..." id="event_title" />
                                    <br/>
                                    <a href="javascript:;" id="event_add" class="btn green"> Nuevo evento </a>
                                </form>
                                <hr/>
                                <div id="event_box" class="margin-bottom-10"></div>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline" for="drop-remove"> remover después de arrastrar
                                    <input type="checkbox" class="group-checkable" id="drop-remove" />
                                    <span></span>
                                </label>
                                <hr class="visible-xs" /> </div>
                            <!-- END DRAGGABLE EVENTS PORTLET-->
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div id="calendar" class="has-toolbar"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->


@endsection

@section('scripts')

    <script>
        $("#litree-dashboard").addClass('active');
        $("#li-calendar").addClass('active');
    </script>
		<script src="{{ asset('public/plugins/moment.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('public/js/calendar/calendar.js') }}" type="text/javascript"></script>
@endsection
