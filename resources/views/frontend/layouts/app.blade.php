<!doctype html>
<html>
<!-- Mirrored from rstheme.com/products/html/news24/news-magazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 18:52:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/SolaimanLipi.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
    <!-- font-awesome css -->
    <!-- bootstrap v5.0.2 css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font_custom.css') }}">
</head>
<body >
@include('frontend.layouts.header')
@include('frontend.layouts.navigation')
@include('frontend.layouts.breking_news')



@yield('content')




    <!-- jquery js -->
    <script src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>
    <!-- Bootstrape js -->
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <!-- fontawsome js -->
  <script src="{{ asset('frontend/js/all.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

</body>
</html>
