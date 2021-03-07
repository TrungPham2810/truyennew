<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/icon.png')}}" type="image/png" sizes="32x32"/>
    @yield('title')
    <!-- Bootstrap -->
{{--<link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">--}}
<!-- Font Awesome -->
    <link href="{{asset('vendors/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet">
    @yield('css')

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d63186b94a.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    @yield('js')

</body>
</html>
