<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</head>
<body>
    <div id="app">
        <nav>
            <div class="nav-wrapper">
                <a href="{{route('home')}}" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
