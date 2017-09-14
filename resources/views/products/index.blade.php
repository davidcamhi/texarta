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
                    <a href="#">Productos</a>
                    <i class="fa fa-circle"></i>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Productos
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
                            <i class="fa fa-layers"></i>Productos </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{ url('productos/create') }}">
                                            <button id="sample_editable_1_new" class="btn sbold green"> Agregar
                                                <i class="fa fa-plus"></i>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="desktop">Id</th>
                                <th class="all"> Nombre </th>
                                <th class="all"> Familia </th>
                                <th class="all"> Color </th>
                                <th class="all"> Descripción </th>
                                <th class="min-tablet"> Principal </th>
                                <th class="min-tablet"> Disponible </th>
                                <th class="none"> Fibra </th>
                                <th class="none"> Tejido </th>
                                <th class="none"> Peso </th>
                                <th class="none"> Ancho </th>
                                <th class="none"> Backing </th>
                                <th class="none"> Patrón </th>
                                <th class="none"> Imagen </th>
                                <th class="min-tablet"> Acciones </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr class="odd gradeX">

                                    <td>{{ $product->id }}</td>
                                    <td> {{ $product->name }}  </td>
                                    <td> {{ $product->category->name }}  </td>
                                    <td> {{ $product->color->name }}  </td>
                                    <td>
                                        {!! $product->description !!}
                                    </td>
                                    @if( $product->main == 1)
                                        <td>Si</td>
                                    @else
                                        <td>No</td>
                                    @endif
                                    @if( $product->available == 1)
                                        <td>Si</td>
                                    @else
                                        <td>No</td>
                                    @endif
                                    <td> {{ $product->fiber }}  </td>
                                    <td> {{ $product->fabric }}  </td>
                                    <td> {{ $product->weight }}  </td>
                                    <td> {{ $product->width }}  </td>
                                    <td> {{ $product->backing }}  </td>
                                    <td> {{ $product->pattern }}  </td>
                                    <td width=10%>
                                        <img width="30%" src="/images/web_page/products/{{$product->image}}" class="">
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href=" {{ url('productos/'.$product->id.'/edit')  }} ">
                                                        <i class="icon-docs"></i> Editar </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" onclick="getId({{ $product->id }})" data-toggle="modal" data-target="#modal_user">
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
                    <h4 class="modal-title">¿Estás seguro de eliminar este Producto?</h4>
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
        $("#li-products").addClass('active');
        var token = "{{ csrf_token() }}";
    </script>


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/js/admin/datatable.min.js" type="text/javascript"></script>
    <script src="/js/admin/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/js/admin/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

    <script src="/js/admin/table-datatables-responsive.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        // Redirect
        function redirect_products(){
            window.location="{{URL::to('productos')}}";
        }

        // Get id
        var id = '';
        function getId(id_product){
            id = id_product;
        }

        // Delete tag
        $('#delete').click(function(){

            console.log("Deleting");

            // Ajax request
            $.ajax({
                url: 'productos/getDelete',
                type: 'GET',
                data: { "id": id, "_token": token },
                cache: false,
                success: function(response)
                {
                    console.log(response);
                    redirect_products();
                }
            });
        });
    </script>
@endsection
