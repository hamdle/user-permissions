<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        <script defer src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light"></nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
