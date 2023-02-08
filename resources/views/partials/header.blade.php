@php
    $navItems = [
                [
                    'text'=> 'Characters',
                    'url'=> '#',
                    'active'=> false,
                ],

                [
                    'text'=> 'Comics',
                    'url'=> '#',
                    'active'=> true,
                ],

                [
                    'text'=> 'Movies',
                    'url'=> '#',
                    'active'=> false,
                ],

                [
                    'text'=> 'TV',
                    'url'=> '#',
                    'active'=> false,
                ],

                [
                    'text'=> 'Games',
                    'url'=> '#',
                    'active'=> false,
                ],

                [
                    'text'=> 'Collectibles',
                    'url'=> '#',
                    'active'=> false,
                ],

                [
                    'text'=> 'Videos',
                    'url'=> '#',
                    'active'=> false,
                ],

                [
                    'text'=> 'Fans',
                    'url'=> '#',
                    'active'=> false,
                ],

                [
                    'text'=> 'News',
                    'url'=> '#',
                    'active'=> false,
                ],

                [
                    'text'=> 'Shop',
                    'url'=> '#',
                    'active'=> false,
                ],
            ]
@endphp
<header>
    <div class="container">
        <nav class="d-flex justify-between align-center">
            <a class="logo-container" href="#">
                <img src="{{Vite::asset('resources/assets/images/dc-logo.png')}}" alt="logo" title="logo">
            </a>

            <ul class="d-flex">
                @foreach ($navItems as $navItem)
                <li class="text-uppercase d-flex">
                    <a href="{{$navItem['url']}}" alt="{{ $navItem['text'] }}">{{ $navItem['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>