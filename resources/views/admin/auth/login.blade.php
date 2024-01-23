<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ config('environment.APP_NAME') }} | Login Page</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="title" content="{{ config('environment.APP_NAME') }} | Login Page">
    <meta name="author" content="ColorlibHQ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css"
        integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
        integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/adminlte.css') }}"><!--end::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}"><!--end::Required Plugin(AdminLTE)-->
</head> <!--end::Head--> <!--begin::Body-->

<body class="login-page bg-body-secondary">
    <div class="login-box">
        <div class="login-logo"> <a href="{{route('login')}}"><b>{{ config('environment.APP_NAME') }}</b></a> </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="text-danger" id="login-err"></p>
                <form action="{{ route('post-login') }}" method="post" id="login-form">
                    <div class="input-group " id="email"> 
                        <input type="email" class="form-control" placeholder="Email" name="email" >
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>
                    <div class="input-group mt-3" id="password"> 
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="row mt-3">
                        <div class="col-8">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label> </div>
                        </div> <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
                <div class="social-auth-links text-center mb-3 d-grid gap-2">
                    <p>- OR -</p> <a href="#" class="btn btn-primary"> <i class="bi bi-facebook me-2"></i> Sign in
                        using Facebook
                    </a> <a href="#" class="btn btn-danger"> <i class="bi bi-google me-2"></i> Sign in using
                        Google+
                    </a>
                </div> <!-- /.social-auth-links -->
                <p class="mb-1"> <a href="forgot-password.html">I forgot my password</a> </p>
                {{-- <p class="mb-0"> <a href="register.html" class="text-center">
                        Register a new membership
                    </a> </p> --}}
            </div> <!-- /.login-card-body -->
        </div>

    </div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <div id="toastDefault" class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header float-end bg-success"> 
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> 
        </div>
        <div class="toast-body text-white" id="msg">
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('admin_assets/js/adminlte.js') }}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script src="{{ asset('admin_assets/js/jQuery.min.js') }}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script src="{{ asset('admin_assets/js/common.js') }}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        $(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                let res = ajaxForm(formData);
                console.log("res", res);
                $('.err').remove();
                if (res.success) {
                    $('#toastDefault').find('#msg').text(res.msg);
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance('#toastDefault');
                    toastBootstrap.show();
                    setTimeout(() => {
                        window.location.href = res.url;
                    }, 3000);
                    // autoRedirect(request);
                } else {
                    if (!res.success) {
                        if (res.msg) {
                            $('#login-err').html(res.msg);
                        }
                        let i = 1;
                        $.each(res.errors, function(index, item) {
                            let inputField = $('#' + index);
                            if (i == 1) {
                                inputField.focus();
                            }
                            inputField.after(
                                `<p class="text-danger text-start err mb-0" >${item}</p>`);
                            i++;
                        });
                    }
                }
            });
        });
    </script>
</body><!--end::Body-->

</html>
