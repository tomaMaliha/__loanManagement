<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EasyLoan</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css" type="text/css">
    <!--Bootstrap-slider -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap-slider.min.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/owl.carousel.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css" type="text/css">
    <!--FontAwesome Font Style -->
    <link href="{{asset('/')}}assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google-Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
    <!-- Header -->
     
    @include('frontend.partials.topbar')
    
    <!-- /Header -->
    
    @yield('content')
    
    <!-- Footer -->
   
    @include('frontend.partials.footbar')
    
    <!-- /Footer -->

    <!-- Scripts -->
    <script src="{{asset('/')}}assets/js/jquery.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap-slider.min.js"></script>
    <!--Custome-JS-->
    <script src="{{asset('/')}}assets/js/interface.js"></script>
    <!--Carousel-JS-->
    <script src="{{asset('/')}}assets/js/owl.carousel.min.js"></script>
</body>

</html>
