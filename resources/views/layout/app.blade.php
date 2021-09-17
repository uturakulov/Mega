<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Silkway</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li>
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    {{-- <a href="index3.html" class="nav-link">Home</a> --}}
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    {{-- <a href="#" class="nav-link">Contact</a> --}}
                </li>
            </ul>
            @if (Auth::check())
                <a href="/logout" class="btn btn-secondary">Выход</a>
            @endif
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <i class="fa fa-firefox" style="margin-right: 10px; margin-left: 10px"></i>
                <span class="brand-text font-weight-light">Silkway</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <form action="/search" method="get">
                        {{ csrf_field() }}
                        <div class="input-group">
                            {{-- <input class="form-control form-control-sidebar" type="text" placeholder="Search"
                                name="query">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div> --}}
                    </form>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="{{ route('managers.index') }}" class="nav-link">
                            <i class="fa fa-building" style="margin-right: 5px"></i>
                            <p>
                                Менеджеры
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="fa fa-users" style="margin-right: 1px"></i>
                            <p>
                                Пользователи
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('categories.index') }}" class="nav-link">
                            {{-- <i class="fa fa-code-branch" ></i> --}}
                            <i class="fa fa-sitemap" style="margin-right: 2px"></i>
                            <p>
                                Департаменты
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('departments.index') }}" class="nav-link">
                            <i class="fa fa-location-arrow"></i>
                            <p>
                                Локации
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('order.index') }}" class="nav-link">
                            <i class="fa fa-clipboard"></i>
                            <p>
                                Заявки
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('login.index') }}" class="nav-link">
                            <i class="fa fa-key"></i>
                            <p>
                                Пароли
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('stock.index') }}" class="nav-link">
                            <i class="fa fa-arrow-up"></i>
                            <p>
                                Акция
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('broadcast.index') }}" class="nav-link">
                            <i class="fa fa-reply"></i>
                            <p>
                                Рассылка
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
        {{-- <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div> --}}
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
        </div>
        <!-- Default to the left -->
        Copyright &copy; 2021 <strong><a>Silkway</a></strong>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/js/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
</body>

</html>
