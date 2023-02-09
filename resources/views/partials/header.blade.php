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
    <div class="my_container">
        <nav class="my_d-flex my_justify-between my_align-center">
            <a class="my_logo-container" href="{{route('home')}}">
                <img src="{{Vite::asset('resources/assets/images/dc-logo.png')}}" alt="logo" title="logo">
            </a>

            <ul class="my_d-flex my_wrap">
                @foreach ($navItems as $navItem)
                <li class="my_text-uppercase my_d-flex {{(Request::route()->getName() === $navItem['url']) ? 'my_active' : ''}}">
                    <a href="{{route($navItem['url'])}}" alt="{{ $navItem['text'] }}">{{ $navItem['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>