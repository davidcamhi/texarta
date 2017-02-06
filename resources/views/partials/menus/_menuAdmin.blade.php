
<li class="nav-item " id="li-analytics">
    <a href="{{ url('admin') }}" class="nav-link ">
        <i class="icon-home"></i>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item" id="li-users">
    <a href=" {{ url('usuarios') }} " class="nav-link">
        <i class="icon-user"></i>
        <span class="title">Usuarios</span>
    </a>
</li>

<li class="nav-item" id="li-products">
    <a href=" {{ url('productos') }} " class="nav-link">
        <i class="fa fa-tags"></i> 
        <span class="title">Productos</span>
    </a>
</li>

<li class="nav-item" id="li-categories">
    <a href=" {{ url('lineas') }} " class="nav-link">
        <i class="fa fa-sitemap"></i> 
        <span class="title">Líneas</span> 
    </a>
</li>
<li class="nav-item" id="li-colors">
    <a href=" {{ url('admin_colores') }} " class="nav-link">
        <i class="fa fa-paint-brush"></i> 
        <span class="title">Colores</span> 
    </a>
</li>

<li class="nav-item " id="litree-contact">
    <a href="javascript:void(0);" class="nav-link nav-toggle">
        <i class="fa fa-envelope"></i>
        <span class="title">Contacto</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        
        <li class="nav-item start" id="li-messages">
            <a href=" {{ url('mensajes') }} " class="nav-link ">
                <i class="fa fa-envelope"></i>
                <span class="title">Mensajes</span>
                <!--<span class="badge badge-success">1</span>-->
            </a>
        </li>
        <li class="nav-item start" id="li-prices">
            <a href=" {{ url('cotizacion') }} " class="nav-link ">
                <i class="fa fa-dollar"></i>
                <span class="title">Cotizaciones</span>
                <!--<span class="badge badge-success">1</span>-->
            </a>
        </li>
        <li class="nav-item start" id="li-samples">
            <a href=" {{ url('muestras') }} " class="nav-link ">
                <i class="fa fa-pencil"></i>
                <span class="title">Muestras</span>
                <!--<span class="badge badge-success">1</span>-->
            </a>
        </li>
        <!--<li class="nav-item start" id="li-calendar">
            <a href="  " class="nav-link ">
                <i class="icon-calendar"></i>
                <span class="title">Calendario</span>
            </a>
        </li>-->
    </ul>
</li>


