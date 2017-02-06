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
                    <a href="#">Mensajes</a>
                    <i class="fa fa-circle"></i>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Mensajes
            <!--<small>managed datatable samples</small>-->
        </h3>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-layers"></i>Mensajes </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="desktop">Id</th>
                                    <th class="all"> Nombre </th>
                                    <th class="min-tablet"> email </th>
                                    <th class="all"> Mensaje </th>
                                    <th class="none"> Compañía </th>
                                    <th class="none"> Teléfono </th>
                                    <th class="min-tablet"> Acciones </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                    <tr class="odd gradeX">
                                        <td>{{ $message->id }}</td>
                                        <td> {{ $message->name }}  </td>
                                        <td> {{ $message->email }}  </td>
                                        <td>
                                           {{ $message->message }}
                                        </td>
                                         <td> {{ $message->company }}  </td>
                                         <td> {{ $message->tel }}  </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="javascript:;" onclick="getId({{ $message->id }})" data-toggle="modal" data-target="#modal_user">
                                                            <i class="icon-trash"></i> Eliminar </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- Modal Delete tag -->
    <div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">¿Estás seguro de eliminar este Mensaje?</h4>
                </div>
                <div class="modal-body">
                    <button id="delete" class="btn btn-danger">Borrar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Regresar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- END CONTENT BODY -->
@section('scripts')
    <script>
        $("#litree-contact").addClass('active');
        $("#li-messages").addClass('active');
         var token = "{{ csrf_token() }}";
    </script>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('public/js/admin/datatable.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/admin/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/admin/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>

<script src="{{ asset('public/js/admin/table-datatables-responsive.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
 <script>
    // Redirect
    function redirect_messages(){
        window.location="{{URL::to('mensajes')}}";
    }

    // Get id
    var id = '';
    function getId(id_message){
        id = id_message;
    }

    // Delete tag
    $('#delete').click(function(){

        console.log("Deleting");

        // Ajax request
        $.ajax({
            url: 'mensajes/getDelete',
            type: 'GET',
            data: { "id": id, "_token": token },
            cache: false,
            success: function(response)
            {
                console.log(response);
                redirect_messages();
            }
        });
    });
</script>
@endsection
