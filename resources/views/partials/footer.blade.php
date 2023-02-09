@php
    $imgsPath = 'resources/assets/images/footer-';

    $navSections= [
                [
                    'title'=> 'Dc Comics',
                    'navItems'=> [
                        'Characters',
                        'Comics',
                        'Movies',
                        'TV',
                        'Games',
                        'Videos',
                        'News',
                    ]
                ],

                [
                    'title'=> 'Shop',
                    'navItems'=> [
                        'Shop DC',
                        'Shop DC Collectibles',
                    ]
                ],

                [
                    'title'=> 'DC',
                    'navItems'=> [
                        'Terms of Use',
                        'Privacy policy(new)',
                        'Ad Choices',
                        'Advertising',
                        'Jobs',
                        'Subscriptions',
                        'Talent Workshops',
                        'CPSC Certificates',
                        'Ratings',
                        'Shop Help',
                        'Contact Us',
                    ]
                ],

                [
                    'title'=> 'Sites',
                    'navItems'=> [
                        'DC',
                        'MAD Magazines',
                        'DC Kids',
                        'DC Universe',
                        'DC Power Visa',
                    ]
                ],
];

    $socialLinks= [
                [
                    'url'=> 'facebook',
                    'description'=> 'Facebook',
                ],


                [
                    'url'=> 'twitter',
                    'description'=> 'Twitter',
                ],


                [
                    'url'=> 'youtube',
                    'description'=> 'Youtube',
                ],


                [
                    'url'=> 'pinterest',
                    'description'=> 'Pinterest',
                ],


                [
                    'url'=> 'periscope',
                    'description'=> 'Google Maps',
                ],
            ]
@endphp


<footer>
    <section id="navbar-container" class="container d-flex">
        <nav class="d-flex wrap column">
            @foreach ($navSections as $navSection)
            <div class="nav-item">
                <span class="text-uppercase title">{{ $navSection['title'] }}</span>
                <ul>
                    @foreach ($navSection['navItems'] as $navItem)
                    <li><a href="#" alt="{{$navItem}}">{{ $navItem }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </nav>

        <div class="img-container">
        </div>
    </section>

    <section id="social-links" class="container d-flex justify-between">
        <a href="" class="btn text-uppercase d-flex align-center">Sign-Up Now!</a>
        <div class="social-links-container d-flex align-center">
            <span class="text-uppercase">Follow Us</span>
            <ul class="d-flex">
                @foreach ($socialLinks as $socialLink)
                <li><a href="#"><img src="{{Vite::asset($imgsPath . $socialLink['url'] . '.png')}}"></a>
                </li>
                    
                @endforeach
            </ul>
        </div>
    </section>
</footer>