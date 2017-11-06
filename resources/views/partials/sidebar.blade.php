<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Clientes</span></a></li>
            <li><a href="{{url('users')}}"><i class='fa fa-link'></i> <span>Usuarios</span></a></li>
            <li><a href="{{url('clients')}}"><i class='fa fa-link'></i> <span>Clientes</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Productos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('products')}}">Productos</a></li>
                    <li><a href="{{url('product-types')}}">Tipos de Producto</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Pedidos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('orders')}}">Pedidos</a></li>
                    <li><a href="{{url('created-orders')}}">Pedidos Creados</a></li>
                    <li><a href="#">Pedidos con Material Comprado</a></li>
                    <li><a href="#">Pedidos en Obra Gruesa</a></li>
                    <li><a href="#">Pedidos en obra Fina</a></li>
                    <li><a href="#">Pedidos Entregados</a></li>
                    <li><a href="#">Pedidos Finalizados</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
