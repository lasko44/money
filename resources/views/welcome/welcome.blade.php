<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Money Homemade</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>
<body class="bg-rich-green-light">
    <div id="app">
        @include('partials.welcome-nave')
        <div class="content-container m-bottom-10">
            <div class="container m-top-15 m-top-10 bg-rich-green-extra-light rounded-3 shadow-rg-bl-sm p-4">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="abril display-3 rich-green-dark m-top-5">Let's Make Money From Home</h1>
                        <div class="h-line-thin bg-extra-pale-spring"></div>
                        <div class="row m-top-5 m-bottom-2">
                            <div class="d-flex justify-content-start">
                                <p class="roboto w-95-p medium extra-pale-spring">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Fames ac turpis egestas maecenas pharetra convallis posuere morbi.
                                    Vitae nunc sed velit dignissim sodales. In massa tempor nec feugiat
                                    nisl pretium fusce id.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="d-flex justify-content-center m-top-2 m-bottom-10">
                                <div class="col-8">
                                    <div class="d-flex justify-content-center">
                                        <h2 class="abril rich-green-dark display-6 fw-bold">Money Made</h2>
                                    </div>
                                    <div class="h-line-extra-thin bg-extra-pale-spring"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row  m-bottom-10">
                            <div class="d-flex justify-content-center">
                                <h3 class="display-3 extra-pale-spring abril">$1000.00</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="col-8">
                                    <div class="h-line-extra-thin bg-rich-green-light"></div>
                                    <div class="d-flex justify-content-center m-top-2">
                                        <p class="small rich-green-light"> As of: </p>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <p class="small rich-green-light ">
                                            <script> document.write(new Date().toLocaleDateString()); </script>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    function  navSlide(){
        const nav = document.querySelector('.nav-list');
        nav.classList.toggle('nav-list-active');
    }
</script>

