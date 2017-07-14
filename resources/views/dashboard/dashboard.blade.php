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
				<div class="visual">
					<i class="fa fa-comments"></i>
				</div>
				<div class="details">
					<div class="number">
						<span data-counter="counterup" data-value="{{ $total_products }}">0</span>
					</div>
					<div class="desc"> Productos </div>
				</div>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="visual">
					<i class="fa fa-bar-chart-o"></i>
				</div>
				<div class="details">
					<div class="number">
						<span data-counter="counterup" data-value="{{ $total_colors }}">0</span> </div>
					<div class="desc"> Colores </div>
				</div>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="visual">
					<i class="fa fa-shopping-cart"></i>
				</div>
				<div class="details">
					<div class="number">
						<span data-counter="counterup" data-value="{{ $total_categories }}">0</span>
					</div>
					<div class="desc"> Líneas </div>
				</div>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="visual">
					<i class="fa fa-globe"></i>
				</div>
				<div class="details">
					<div class="number">
						<span data-counter="counterup" data-value="{{ $total_users }}">0</span> </div>
					<div class="desc">Administradores </div>
				</div>
	        </div>
	    </div>
	    <div class="clearfix"></div>
	    <!-- END DASHBOARD STATS 1-->
		<div class="row">
			<!-- Visitors -->
			<div class="col-md-6">
				<div class="panel panel-primary" >
					<div class="panel-heading">
						Visitantes en los últimos 6 días
					</div>
					<div class="panel-body" id="visitors">

					</div>
				</div>
			</div>

			<!-- Visitors -->
			<div class="col-md-6">
				<div class="panel panel-primary" >
					<div class="panel-heading">
						Pageviews en los últimos 6 días
					</div>
					<div class="panel-body" id="pageviews">

					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Top visitas -->
			<div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Pageviews por ruta de la página
					</div>
					<div class="panel-body" class="table-responsive">
						<table id="pageviews" class="table table-striped">
							<thead>
							<tr>
								<th>Página</th>
								<th>Pageviews</th>
							</tr>
							</thead>

							<tbody>
							@if($pageviews)
								@for($i = 0; $i < count($pageviews); $i++)
									<tr>
										<td>{{ $pageviews[$i][0] }}</td>
										<td>{{ $pageviews[$i][1] }}</td>
									</tr>
								@endfor
							@endif

							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!-- Visitors by cities -->
			<div class="col-lg-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Sesiones por ciudad
					</div>
					<!----------------------------------------------------------------------------
                        PANEL BODY - Gráfica cities
                    ----------------------------------------------------------------------------->
					<div class="panel-body" id="visitors_cities" class="table-responsive">
						<table class="table table-striped">
							<thead>
							<tr>
								<th>No.</th>
								<th>País</th>
								<th>Ciudad</th>
								<th>Sesiones</th>
							</tr>
							</thead>

							<tbody>
							@if($result_cities)
								@for($i = 0; $i < count($result_cities); $i++)
									<tr>
										<td>{{ $i + 1 }}</td>
										<td>{{ $result_cities[$i][0] }}</td>
										<td>{{ $result_cities[$i][1] }}</td>
										<td>{{ $result_cities[$i][2] }}</td>
									</tr>
								@endfor
							@endif

							</tbody>
						</table>

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
        $("#li-analytics").addClass('active');
    </script>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/plugins/moment.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
    <script src="/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
    <script src="/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
    <script src="/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <script src="/js/dashboard/dashboard.js" type="text/javascript"></script>

	<!-- Highcharts -->
	<script src="/plugins/highcharts/highcharts.js"></script>
	<script src="/plugins/highcharts/exporting.js"></script>

	{!! $chart_visitors !!}
	{!! $chart_pageviews !!}

@endsection
