<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ config('environment.APP_NAME') }} | Dashboard</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="{{ config('environment.APP_NAME') }} | Dashboard">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="ColorlibHQ">
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css"
        integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
        integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/adminlte.css') }}">
    <!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/js/datatable/datatables.min.css')}}"/>
    @yield('style')
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i> </a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i
                                data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i
                                data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                        </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"> <img
                                src="{{ asset('admin_assets/assets/img/user2-160x160.jpg') }}"
                                class="user-image rounded-circle shadow" alt="User Image"> <span
                                class="d-none d-md-inline">{{auth()->user()->name}}</span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img
                                    src="{{ asset('admin_assets/assets/img/user2-160x160.jpg') }}"
                                    class="rounded-circle shadow" alt="User Image">
                                <p>
                                    {{auth()->user()->name}}</small>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                            {{-- <li class="user-body"> <!--begin::Row-->
                                <div class="row">
                                    <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                                </div> <!--end::Row-->
                            </li> --}} <!--end::Menu Body--> <!--begin::Menu Footer-->
                            {{-- <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                                <a href="{{route('logout')}}" class="btn btn-default btn-flat float-end">Sign out</a> </li>
                            <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> 
                <a href="{{route('admin')}}" class="brand-link">
                    <!--begin::Brand Image--> 
                    <img src="{{ asset('admin_assets/assets/img/matrixOneWhite.png') }}"
                        alt="{{ config('environment.APP_NAME') }} Logo" class="brand-image opacity-75 shadow"> 
                    <!--end::Brand Image-->
                </a> <!--end::Brand Link--> 
            </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item"> 
                            <a href="{{route('admin')}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}"> 
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>Dashboard</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="{{route('bench-index')}}" class="nav-link {{ request()->is('admin/bench*') ? 'active' : '' }}"> 
                                <i class="nav-icon bi bi-person-circle"></i>
                                <p>Bench Profile</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="{{route('requirements-index')}}" class="nav-link {{ request()->is('admin/requirements*') ? 'active' : '' }}"> 
                                <i class="nav-icon bi bi-briefcase"></i>
                                <p>Requirenments</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="{{route('partner-index')}}" class="nav-link {{ request()->is('admin/partner*') ? 'active' : '' }}"> 
                                <i class="nav-icon bi bi-people"></i>
                                <p>Partners Tracker</p>
                            </a> 
                        </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->
        @yield('content')
        <div id="toastDefault" class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header float-end bg-success"> 
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> 
            </div>
            <div class="toast-body text-white" id="msg">
                
            </div>
        </div>
        <footer class="app-footer"> <!--begin::To the end-->
            <!--begin::Copyright--> <strong>
                Copyright &copy; {{date('Y')}}&nbsp;
                <a href="#" class="text-decoration-none">{{ config('environment.APP_NAME') }}</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script>
        var baseurl = "{{config('app.url')}}";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('admin_assets/js/adminlte.js') }}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script src="{{ asset('admin_assets/js/jQuery.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('admin_assets/js/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/common.js') }}"></script>
    @yield('js')
</body><!--end::Body-->

</html>
