<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Find the best ways for you to make money from home. Extra cash without the extra pain of figuring out what methods are not worth it">
    <meta name="keywords" content="Money, WFH, Make Money From Home, Extra Cash">

    <title>@yield('title')</title>

    <!-- Google Ads -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8159498208698836"
            crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-extra-pale-spring">
    <div id="app">
        @include('partials.main-nav')
        @yield('content')
        @include('partials.footer')
    </div>
    <script>
        function  navSlide(){
            const nav = document.querySelector('.nav-list');
            nav.classList.toggle('nav-list-active');
        }
    </script>
    @yield('scripts')
</body>
</html>
