<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content="Administrador integrado de gestión de solicitudes de auxilios económicos."/>
        <meta name="author" content="David S. García <Azæl>"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png"/>
        <link rel="stylesheet" href="{{ asset('css/all.css') }}" type="text/css"/>
        <title> Humano - @yield('title')</title>
    </head>
    <body>
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
                </a>
            </div>

            <div class="navbar-inner">
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Principal</span>
                    </h6>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @if($active == 'home') active @endif " href="{{ route('home') }}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text"> Vista general </span>
                            </a>
                        </li>
                    </ul>
                    <hr class="my-3">
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Datos e Información</span>
                    </h6>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @if($active == 'employees') active @endif " href="{{ route('employees.index') }}">
                                <i class="ni ni-single-02 text-orange"></i>
                                <span class="nav-link-text"> Empleados </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($active == 'applications') active @endif " href="{{ route('applications.index') }}">
                                <i class="ni ni-bullet-list-67 text-orange"></i>
                                <span class="nav-link-text"> Solicitudes </span>
                            </a>
                        </li>
                    </ul>
                    <hr class="my-3">
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal"> Informes y resúmenes </span>
                    </h6>
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link @if($active == 'general') active @endif " href="">
                                <i class="ni ni-chart-pie-35 text-indigo"></i>
                                <span class="nav-link-text"> General </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($active == 'specific') active @endif " href="">
                                <i class="ni ni-ruler-pencil text-indigo"></i>
                                <span class="nav-link-text"> Específico </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </nav>
        <div class="main-content" id="panel">
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @yield('top-navbar')
                    </div>
                </div>
            </nav>
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <h6 class="h2 text-white d-inline-block mb-0"> @yield('title') </h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item @if(!isset($extra_breadcrumb)) active @endif "><a href=""> @yield('title') </a></li>
                                        @yield('additional_breadcrumbs')
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-5 text-right">
                                @yield('top-buttons')
                            </div>
                        </div>
                        @yield('header-info')
                    </div>
                </div>
            </div>
            <div class="container-fluid mt--6">
                @yield('content')
                <footer class="footer pt-0">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6">
                            <div class="copyright text-center  text-lg-left  text-muted">
                                &copy; 2020 <a href="https://dragonspark.tech" class="font-weight-bold ml-1" target="_blank"> David S. García</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @yield('meta-content')
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/js.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/all.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/swal.js') }}" type="text/javascript"></script>
        @yield('scripts')
    </body>
</html>
