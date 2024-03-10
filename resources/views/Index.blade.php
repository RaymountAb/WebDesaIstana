<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Website Resmi Desa Istana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/camera.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/jquery.bxslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Theme skin -->
  <link href="assets/color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/icon/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/icon/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/icon/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="assets/icon/favicon.png" />
</head>

<body>

  <div id="wrapper">
    @include('layout.header')

    @yield('container')

    @include('layout.footer')
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

  <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('assets/js/toucheffects.js') }}"></script>
  <script src="{{ asset('assets/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
  <script src="{{ asset('assets/js/camera/camera.js') }}"></script>
  <script src="{{ asset('assets/js/camera/setting.js') }}"></script>

  <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('assets/js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('assets/js/portfolio/setting.js') }}"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('assets/js/animate.js') }}"></script>
  <script src="{{ asset('assets/js/inview.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
