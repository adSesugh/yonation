
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | {{ getSetting('app_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="KeennessSolutions" name="Agbadu Sesugh" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!--tobii lightbox-->
    <link rel="stylesheet" href="{{ asset('css/tobii.min.css') }}" type="text/css" />

    <!--tiny slider-->
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" type="text/css" />

    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--font awesome icon-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />

    <!-- material Icons -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    <!--custom css-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    @stack('css')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="71">
    <!--start page Loader -->
    <div id="preloader">
        <div id="status">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>
    </div>
    <!--end page Loader -->

    @include('layouts.partials.hnav')

    @yield('content')

    @include('layouts.partials.footer')

    <!--start scroll-top-->
    <button onclick="topFunction()" id="scroll-top">
        <i class="mdi mdi-arrow-up-bold"></i>
    </button>
    <!--end scroll-top-->

    <!--Start login-Modal -->
    <div class="modal fade" id="login" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header border-0">
                    <h5 class="modal-title mx-auto" id="login-form">Login Form</h5>
                </div>
                <!--end modal-header-->
                <form action="#" method="post">
                    <div class="modal-body py-0">
                        <div class="mb-3">
                            <label for="emailPhone" class="form-label">Email or Phone</label>
                            <input type="text" class="form-control" id="emailPhone" required />
                        </div>
                        <div class="mb-2">
                            <div>
                                <label for="loginPassword" class="form-label">Password</label>
                                <a href="#" class="text-muted float-end"><small>Forgot Password?</small></a>
                            </div>
                            <input type="password" class="form-control" id="loginPassword" required />
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" />
                            <label class="form-check-label" for="remember"> Remember me</label>
                        </div>
                    </div>
                    <!--end modal-body-->
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                        <div class="mx-auto mt-2">
                            <span class="text-muted">Not a Member? <a href="#" class="text-dark">Signup Now</a></span>
                        </div>
                    </div>
                    <!--end modal-footer-->
                </form>
                <!--end form-->
            </div>
        </div>
    </div>
    <!--end login-modal-->

    <!-- javascript -->
   @include('layouts.partials.scripts')
</body>

</html>