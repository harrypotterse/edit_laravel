<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> {{ config('app.name', 'Laravel') }} </title>
      <!-- Bootstrap -->
      <link href="{{ asset('website/css/bootstrap.min.css ') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <link href="{{ asset('website/fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
      <!-- Fontello icon -->
      <link href="{{ asset('website/fontello/css/fontello.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('website/wedding-icon-font/flaticon.css') }}">
      <!-- OwlCarosuel CSS -->
      <link href="{{ asset('website/css/owl.carousel.css') }}" type="text/css" rel="stylesheet">
      <link href="{{ asset('website/css/owl.theme.default.css') }}" type="text/css" rel="stylesheet">
      <!-- Favicon icon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('website/css/dzsparallaxer.css') }}">
      <!-- Style CSS -->
      <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('website/css/rtl.css') }}" rel="stylesheet">

</head>

<body class="couple-bg-image">



    @yield('content')
    

   
   <script src="{{ asset('website/js/jquery.min.js ') }}"></script>
   <script src="{{ asset('website/js/bootstrap.min.js ') }}"></script>
   <script src="{{ asset('website/js/owl.carousel.min.js ') }}"></script>
   <script src="{{ asset('website/js/jquery.nice-select.min.js ') }}"></script>
   <script src="{{ asset('website/js/fastclick.js ') }}"></script>
   <script src="{{ asset('website/js/custom-script.js ') }}"></script>
   <script src="{{ asset('website/js/return-to-top.js ') }}"></script>
   <script src="{{ asset('website/js/dzsparallaxer.js ') }}"></script>

    
</body>



</html>