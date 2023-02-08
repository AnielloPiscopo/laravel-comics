<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title','Laravel Comics')
        </title>

        <link rel="icon" href="{{Vite::asset('resources/assets/images/favicon.ico')}}">

        <!-- Styles -->
        @vite('resources/js/app.js')
        @yield('styles');
    </head>



    <body>
        @include('partials.header')

        <main>
            <section id="jumbotron">
                <div class="background"></div>
        
                @yield('main-content')
            </section>
        </main>
        
        @include('partials.footer')
    </body>
</html>
