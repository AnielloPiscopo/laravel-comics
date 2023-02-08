<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>

        <!-- Styles -->
        @vite('resources/js/app.js')
    </head>



    <body>
        @include('partials.header')
        <main>
            @yield('main-content')
        </main>
        @include('partials.footer')
    </body>
</html>
