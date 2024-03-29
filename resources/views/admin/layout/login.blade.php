<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Login Admin</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/morris.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/dropzone.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">

    <!-- Page Level Stylesheets -->

</head>

<body>

    <!-- Wrapper Start -->
    <div class="wrapper">

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Login Page Start -->
        <div class="m-account-w" data-bg-img="assets/admin/assets/img/bg_login.png">
            <div class="m-account">
                <div class="row no-gutters">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <!-- Login Form Start -->
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <img src="assets/img/logo.png" alt="">
                                </div>
                                <!-- Logo End -->

                                <form action="login" method="POST">
                                    <label class="m-account--title">Login Admin</label>
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input type="text" name="name" placeholder="Username"
                                                class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>

                                            <input type="password" name="password" placeholder="Password"
                                                class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="m-account--actions">
                                        <button type="submit" class="btn btn-rounded btn-info">Login</button>
                                    </div>
                                    <div class="m-account--footer">
                                        <p>&copy; 2024 Admin Desa-Istana</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Page End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="assets/admin/assets/js/jquery.min.js"></script>
    <script src="assets/admin/assets/js/jquery-ui.min.js"></script>
    <script src="assets/admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/admin/assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/admin/assets/js/jquery.sparkline.min.js"></script>
    <script src="assets/admin/assets/js/raphael.min.js"></script>
    <script src="assets/admin/assets/js/morris.min.js"></script>
    <script src="assets/admin/assets/js/select2.min.js"></script>
    <script src="assets/admin/assets/js/jquery-jvectormap.min.js"></script>
    <script src="assets/admin/assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="assets/admin/assets/js/horizontal-timeline.min.js"></script>
    <script src="assets/admin/assets/js/jquery.validate.min.js"></script>
    <script src="assets/admin/assets/js/jquery.steps.min.js"></script>
    <script src="assets/admin/assets/js/dropzone.min.js"></script>
    <script src="assets/admin/assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/admin/assets/js/datatables.min.js"></script>
    <script src="assets/admin/assets/js/main.js"></script>

    <!-- Page Level Scripts -->

</body>

</html>
