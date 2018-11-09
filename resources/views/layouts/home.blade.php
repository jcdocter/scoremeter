<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
<link href="{{asset ('css/home.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="home-body">
        @yield('content')
</div>
</body>
</html>