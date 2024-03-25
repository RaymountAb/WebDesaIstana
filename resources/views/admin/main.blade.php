<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Website Admin</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/morris.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/jquery-jvectormap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/horizontal-timeline.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/ion.rangeSlider.skinFlat.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/dataTables.dataTables.css') }}">

    <!-- Page Level Stylesheets -->

</head>

<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="index.html" class="logo">
                    <img src="../assets/admin/assets/img/logo.png" alt="">
                </a>
                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->
        </header>
        <!-- Navbar End -->

        <!-- Sidebar Start -->
        @include('admin.layout.sidebar')
        <!-- Sidebar End -->

        <!-- Main Container Start -->
        @yield('container')
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="{{ asset('assets/admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/jquery-jvectormap-world-mill.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/horizontal-timeline.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>

</body>

</html>
