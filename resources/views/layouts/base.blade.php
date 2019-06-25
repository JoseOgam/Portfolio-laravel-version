<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">


    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{('js/jquery-ui.js')}}"></script>
<script src="{{('js/popper.min.js')}}"></script>
<script src="{{('js/bootstrap.min.js')}}"></script>
<script src="{{('js/owl.carousel.min.js')}}"></script>
<script src="{{('js/jquery.easing.1.3.js')}}"></script>
<script src="{{('js/aos.js')}}"></script>
<script src="{{('js/jquery.fancybox.min.js')}}"></script>
<script src="{{('js/jquery.sticky.js')}}"></script>

<script src="{{('js/main.js')}}"></script>
</body>
</html>
