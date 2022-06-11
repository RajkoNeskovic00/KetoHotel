<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('desc')">
    <meta name="author" content="Rajko Nešković">
    <meta name="keywords" content="@yield('key')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel='shortcut icon' href='{{asset('assets/images/favicon.ico')}}'/>
    <!-- Title Page-->
    <title>Dashboard | @yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('assetsAdmin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('assetsAdmin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('assetsAdmin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assetsAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assetsAdmin/css/theme.css')}}" rel="stylesheet" media="all">



</head>
