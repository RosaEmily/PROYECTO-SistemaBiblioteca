@extends('layouts.app')

@section('content')
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="padding-left: 20px; padding-right: 20px;">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('dashboard')}}" class="nav-link">DASHBOARD</a>
                </li>
                </ul>
            
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="" data-toggle="dropdown" href="#">
                    <i class="fa fa-adjust nav-link" style="font-size: 30px;"></i></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button style="background: none; border:none; outline:none;"><i class="fa fa-power-off nav-link" style="font-size: 30px;"></i></button>
                    </form>
                </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{route('dashboard')}}" class="brand-link" style="padding-top: 15px;">
                    <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>
            
                <!-- Sidebar -->
                <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <span style="color:#fff;">{{auth()->user()->email}}</span>
                    </div>
                </div>
            
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="{{route('prestamo.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                PRÉSTAMOS
                            </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('prestamista.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                PRESTAMISTAS
                            </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('publicacion.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                PUBLICACIONES
                            </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('evento.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                CALENDARIO
                            </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/grafico" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                GRÁFICOS
                            </p>
                            </a>
                        </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            DETALLES
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('autor.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>AUTORES</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('editorial.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>EDITORIALES</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tema.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>TEMAS</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('idioma.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>IDIOMAS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">        
                <!-- Main content -->
                <section class="content" style="padding-top: 30px; padding-bottom: 30px; padding-left: 20px; padding-right:20px;">
                    <div class="container-fluid">
                        @yield('section')
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer" style="text-align: center">
                <strong>Copyright &copy;<a href="#">Rosa Emily Rodríguez Huamán</a>.</strong>
                All rights reserved.
            </footer>
        </div>
    </body>
@endsection
