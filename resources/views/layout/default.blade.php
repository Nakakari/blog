<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    {{-- <title>@yield('judul')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template') }}/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/argon.css?v=1.2.0" type="text/css"> --}}
</head>

<body>
    {{-- <!-- Sidenav -->
    @include('layout.v_sidenav')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('layout.v_topnav')
        <!-- Header -->
        <!-- Header -->
        @include('layout.v_header')
        <!-- Page content --> --}}
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
        {{-- <!-- Footer -->
            @include('layout.v_footer') --}}
    </div>
    </div>
    <!-- Argon Scripts -->
    {{-- <!-- Core -->
    <script src="{{ asset('template') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="{{ asset('template') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="{{ asset('template') }}/assets/js/argon.js?v=1.2.0"></script> --}}
</body>

</html>
