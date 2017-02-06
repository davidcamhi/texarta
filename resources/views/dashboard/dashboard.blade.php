@extends('layouts.app')

@section('content')

	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE BAR -->
	    <div class="page-bar">
	        <ul class="page-breadcrumb">
	            <li>
	                <a href="index.html">Home</a>
	                <i class="fa fa-circle"></i>
	            </li>
	            <li>
	                <span>Dashboard</span>
                    
	            </li>
	        </ul>
	       <!-- <div class="page-toolbar">
	            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
	                <i class="icon-calendar"></i>&nbsp;
	                <span class="thin uppercase hidden-xs"></span>&nbsp;
	                <i class="fa fa-angle-down"></i>
	            </div>
	       </div>-->
	    </div>
	    <!-- END PAGE BAR -->
	    <!-- BEGIN PAGE TITLE-->
	    <h3 class="page-title"> Dashboard
	        <small>analytics</small>
	    </h3>
	    <!-- END PAGE TITLE-->
	    <!-- END PAGE HEADER-->
	    <!-- BEGIN DASHBOARD STATS 1-->
	    <div class="row">
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
	                <div class="visual">
	                    <i class="fa fa-comments"></i>
	                </div>
	                <div class="details">
	                    <div class="number">
	                        <span data-counter="counterup" data-value="1349">0</span>
	                    </div>
	                    <div class="desc"> Nuevas Visitas </div>
	                </div>
	            </a>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
	                <div class="visual">
	                    <i class="fa fa-bar-chart-o"></i>
	                </div>
	                <div class="details">
	                    <div class="number">
	                        <span data-counter="counterup" data-value="2.5">0</span>hr </div>
	                    <div class="desc"> Tiempo de usuario en página </div>
	                </div>
	            </a>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
	                <div class="visual">
	                    <i class="fa fa-shopping-cart"></i>
	                </div>
	                <div class="details">
	                    <div class="number">
	                        <span data-counter="counterup" data-value="12.5">0</span>hr
	                    </div>
	                    <div class="desc"> Tiempo que tarda usuario en regresar </div>
	                </div>
	            </a>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
	                <div class="visual">
	                    <i class="fa fa-globe"></i>
	                </div>
	                <div class="details">
	                    <div class="number"> 
	                        <span data-counter="counterup" data-value="0.1">0</span>s </div>
	                    <div class="desc"> Tiempo de carga </div>
	                </div>
	            </a>
	        </div>
	    </div>
	    <div class="clearfix"></div>
	    <!-- END DASHBOARD STATS 1-->
	    <div class="row">
	        <div class="col-md-12 col-sm-12">
	            <!-- BEGIN PORTLET-->
	            <div class="portlet light bordered">
	                <div class="portlet-title">
	                    <div class="caption">
	                        <i class="icon-bar-chart font-dark hide"></i>
	                        <span class="caption-subject font-dark bold uppercase">Visitas al sitio</span>
	                        <span class="caption-helper">mensuales...</span>
	                    </div>
	                </div>
	                <div class="portlet-body">
	                    <div id="site_statistics_loading">
	                        <img src="{{ asset('public/img/loading.gif') }}" alt="loading" /> </div>
	                    <div id="site_statistics_content" class="display-none">
	                        <div id="site_statistics" class="chart"> </div>
	                    </div>
	                </div>
	            </div>
	            <!-- END PORTLET-->
	        </div>
	        <!--<div class="col-md-6 col-sm-6">
	            <div class="portlet light bordered">
	                <div class="portlet-title">
	                    <div class="caption">
	                        <i class="icon-share font-dark hide"></i>
	                        <span class="caption-subject font-dark bold uppercase">Datos Regionales</span>
	                    </div>
	                    <div class="actions">
	                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" data-container="false" data-placement="bottom" href="javascript:;"> </a>
	                    </div>
	                </div>
	                <div class="portlet-body">
	                    <div id="region_statistics_loading">
	                        <img src="{{ asset('public/img/loading.gif') }}" alt="loading" /> </div>
	                    <div id="region_statistics_content" class="display-none">
	                        <div class="btn-toolbar margin-bottom-10">
	                            <div class="btn-group pull-right">
	                                <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Selecciona Región
	                                    <span class="fa fa-angle-down"> </span>
	                                </a>
	                                <ul class="dropdown-menu pull-right">
	                                    <li>
	                                        <a href="javascript:;" id="regional_stat_world"> World </a>
	                                    </li>
	                                    <li>
	                                        <a href="javascript:;" id="regional_stat_usa"> USA </a>
	                                    </li>
	                                    <li>
	                                        <a href="javascript:;" id="regional_stat_europe"> Europe </a>
	                                    </li>
	                                    <li>
	                                        <a href="javascript:;" id="regional_stat_russia"> Russia </a>
	                                    </li>
	                                    <li>
	                                        <a href="javascript:;" id="regional_stat_germany"> Germany </a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div id="vmap_world" class="vmaps display-none"> </div>
	                        <div id="vmap_usa" class="vmaps display-none"> </div>
	                        <div id="vmap_europe" class="vmaps display-none"> </div>
	                        <div id="vmap_russia" class="vmaps display-none"> </div>
	                        <div id="vmap_germany" class="vmaps display-none"> </div>
	                    </div>
	                </div>
	            </div>
	        </div>-->
	    </div>
	    
	    <div class="row">
	        <div class="col-md-6 col-sm-6">
                <!-- BEGIN CHART PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bar-chart font-green-haze"></i>
                            <span class="caption-subject bold uppercase font-green-haze"> Tráfico en las páginas</span>
                            <span class="caption-helper">por página</span>
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                            <a href="javascript:;" class="reload"> </a>
                            <a href="javascript:;" class="fullscreen"> </a>
                            <a href="javascript:;" class="remove"> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="chart_1" class="chart" style="height: 500px;"> </div>
                    </div>
                </div>
                <!-- END CHART PORTLET-->
            </div>
	        <div class="col-md-6 col-sm-6">
                <!-- BEGIN CHART PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bar-chart font-green-haze"></i>
                            <span class="caption-subject bold uppercase font-green-haze"> Clicks en anuncios</span>
                            <span class="caption-helper">por cliente</span>
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                            <a href="javascript:;" class="reload"> </a>
                            <a href="javascript:;" class="fullscreen"> </a>
                            <a href="javascript:;" class="remove"> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="chart_2" class="chart" style="height: 500px;"> </div>
                    </div>
                </div>
                <!-- END CHART PORTLET-->
            </div>
	    </div>
	    
	</div>
	<!-- END CONTENT BODY -->
@endsection

@section('scripts')

    <script>
        $("#litree-dashboard").addClass('active');
        $("#li-analytics").addClass('active');
    </script>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('public/plugins/moment.min.js') }}" type="text/javascript') }}"></script>
    <script src="{{ asset('public/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/horizontal-timeline/horozontal-timeline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <script src="{{ asset('public/js/dashboard/dashboard.js') }}" type="text/javascript"></script>
@endsection
