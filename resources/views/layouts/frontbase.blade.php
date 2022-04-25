<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('assets')}}/img/favicon.png" rel="icon">
    <link href="{{asset('assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link x rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('assets')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('assets')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: EstateAgency
      Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
    @yield("head")
</head>

<body>
@include("home.header")

@section('sidebar')
    @include("home.sidebar")
@show

@section('slider')

@show

@yield('content')

@include("home.footer")
@yield('foot')
</body>
</html>
