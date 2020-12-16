<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Uzdenim</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">


<form style="display: none" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
{{--<main class="py-4">--}}
{{--@yield('content')--}}
{{--</main>--}}
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>
            </li>
        </ul>
        <!-- SEARCH FORM -->

        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ URL::to('/') }}/home/" class="brand-link">
            <img src="{{ URL::to('/') }}/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Uzdenim.uz</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <!-- SidebarSearch Form -->
            <!-- Sidebar Menu -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ URL::to('/') }}/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin panel</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ URL::to('/') }}/home" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home Page
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/') }}/home/files" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Galereya files
                                <span class="right badge badge-danger">{{ $count }}</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Fronted
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ URL::to('/') }}/home/slider" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slider</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL::to('/') }}/home/about" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>About blog</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL::to('/') }}/home/service" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Service blog</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL::to('/') }}/home/video" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Video blog</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL::to('/') }}/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL::to('/') }}/home/clients" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Clients</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL::to('/') }}/home/collegs" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collegs</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/') }}/home/income" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Income comments
                                <span class="right badge badge-danger">{{ $count_income }}</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL::to('/') }}/home/local" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Localization
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-pre
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ URL::to('/') }}/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ URL::to('/') }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::to('/') }}/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ URL::to('/') }}/admin/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ URL::to('/') }}/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ URL::to('/') }}/admin/plugins/raphael/raphael.min.js"></script>
<script src="{{ URL::to('/') }}/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ URL::to('/') }}/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ URL::to('/') }}/admin/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ URL::to('/') }}/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{ URL::to('/') }}/admin/dist/js/pages/dashboard2.js"></script>--}}

</body>
{{--<body>--}}
<!--
{{--
{{--</body>--}}
</html>
