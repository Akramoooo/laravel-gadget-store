<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\header.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\card-container.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\add-btn.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\create-product.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\cart.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\prod_filter.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <title>@yield('title')</title>
</head>

<body>
  @include('includes.header')


  @yield('content')

  @yield('includes')


</body>

</html>