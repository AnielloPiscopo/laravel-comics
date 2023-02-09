@php
    $navItems = [
                [
                    'text'=> 'Characters',
                    'url'=> 'characters',
                ],

                [
                    'text'=> 'Comics',
                    'url'=> 'comics',
                ],

                [
                    'text'=> 'Movies',
                    'url'=> 'movies',
                ],

                [
                    'text'=> 'TV',
                    'url'=> 'tv',
                ],

                [
                    'text'=> 'Games',
                    'url'=> 'games',
                ],

                [
                    'text'=> 'Collectibles',
                    'url'=> 'collectibles',
                ],

                [
                    'text'=> 'Videos',
                    'url'=> 'videos',
                ],

                [
                    'text'=> 'Fans',
                    'url'=> 'fans',
                ],

                [
                    'text'=> 'News',
                    'url'=> 'news',
                ],

                [
                    'text'=> 'Shop',
                    'url'=> 'shop',
                ],
            ]
@endphp
<header>
    <div class="container">
        <nav class="d-flex justify-between align-center">
            <a class="logo-container" href="{{route('home')}}">
                <img src="{{Vite::asset('resources/assets/images/dc-logo.png')}}" alt="logo" title="logo">
            </a>

            <ul class="d-flex wrap">
                @foreach ($navItems as $navItem)
                <li class="text-uppercase d-flex {{(Request::route()->getName() === $navItem['url']) ? 'active' : ''}}">
                    <a href="{{route($navItem['url'])}}" alt="{{ $navItem['text'] }}">{{ $navItem['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>