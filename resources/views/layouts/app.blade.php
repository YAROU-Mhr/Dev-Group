<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="Yarou Mhr portfolio" name="keywords">
    <meta content="Yarou Mhr portfolio" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('Front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Front/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('Front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('Front/css/style.css') }}" rel="stylesheet">


    <!-- Styles -->
    @livewireStyles
</head>

<body>


    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('Front/img/loader') }}.jpg" alt="loader">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York,
                        USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link
                        {{ request()->routeIs('home') ? 'active' : '' }} ">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link
                        {{ request()->routeIs('about') ? 'active' : '' }}">
                        About
                    </a>
                    <a href="{{ route('services') }}"
                        class="nav-item nav-link
                        {{ request()->routeIs('services') ? 'active' : '' }} ">

                        Services
                    </a>
                    <a href="{{ route('blog') }}"
                        class="nav-item nav-link
                        {{ request()->routeIs('blog') ? 'active' : '' }} ">
                        Blog
                    </a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('price') }}"
                                class="dropdown-item
                            {{ request()->routeIs('price') ? 'active' : '' }}
                            ">
                                Pricing Plan
                            </a>
                            <a href="{{ route('feature') }}"
                                class="dropdown-item
                            {{ request()->routeIs('feature') ? 'active' : '' }}
                            ">
                                Our features
                            </a>
                            <a href="{{ route('mhr-dev-team') }}"
                                class="dropdown-item
                            {{ request()->routeIs('mhr-dev-team') ? 'active' : '' }}
                            ">
                                Team Members
                            </a>
                            <a href="{{ route('testimonial') }}"
                                class="dropdown-item
                            {{ request()->routeIs('testimonial') ? 'active' : '' }}
                            ">
                                Testimonial
                            </a>
                            <a href="{{ route('quote') }}"
                                class="dropdown-item
                            {{ request()->routeIs('quote') ? 'active' : '' }}
                            ">
                                Free Quote
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link
                    {{ request()->routeIs('contact') ? 'active' : '' }}
                    ">
                        Contact
                    </a>
                </div>

                @auth

                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="nav-item ms-3 dropdown mb-2">
                            <button class="btn px-3 btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->currentTeam->name }}
                            </button>

                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">

                                <li><small class=" dropdown-item text-muted text-sm">{{ __('Manage Team') }}</small></li>
                                <li>
                                    <a class="dropdown-item
                                        {{ request()->routeIs('teams.show') ? 'active' : '' }}"
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">

                                        {{ __('Team Settings') }}
                                    </a>
                                </li>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <li>
                                        <a class="dropdown-item
                                        {{ request()->routeIs('teams.create') ? 'active' : '' }}"
                                            href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </a>
                                    </li>
                                @endcan
                                <!-- Team Switcher -->
                                @if (Auth::user()->allTeams()->count() > 1)
                                    <hr>
                                    <li><small class=" dropdown-item text-muted text-sm">{{ __('Switch Teams') }}</small>
                                    </li>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <li>
                                            <x-switchable-team :team="$team" />
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>
                    @endif


                    <div class="nav-item ms-3 dropdown mb-2">


                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="rounded-circle object-cover" style="height: 2rem; width: 2rem"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                {{ Auth::user()->name }}
                            </button>
                        @else
                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                        @endif

                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                            <li><small class=" dropdown-item text-muted text-sm">{{ __('Manage Account') }}</small></li>
                            <li>
                                <a class="dropdown-item
                                {{ request()->routeIs('profile.show') ? 'active' : '' }}"
                                    href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <li>
                                    <a class="dropdown-item
                                    {{ request()->routeIs('api-tokens.index') ? 'active' : '' }}"
                                    href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </a>
                                </li>
                            @endif
                            <hr style="margin: 2px 0">
                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        @click.prevent="$root.submit();">{{ __('Log Out') }}</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Nous rejoindre</a>
                @endauth

                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            </div>
        </nav>

        @yield('banner')

    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->



    {{ $slot }}


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('Front/img/vendor-1') }}.jpg" alt="image-outils-utilisé">
                    <img src="{{ asset('Front/img/vendor-2') }}.jpg" alt="image-outils-utilisé">
                    <img src="{{ asset('Front/img/vendor-3') }}.jpg" alt="image-outils-utilisé">
                    <img src="{{ asset('Front/img/vendor-4') }}.jpg" alt="image-outils-utilisé">
                    <img src="{{ asset('Front/img/vendor-5') }}.jpg" alt="image-outils-utilisé">
                    <img src="{{ asset('Front/img/vendor-6') }}.jpg" alt="image-outils-utilisé">
                    <img src="{{ asset('Front/img/vendor-7') }}.jpg" alt="image-outils-utilisé">
                    <img src="{{ asset('Front/img/vendor-8') }}.jpg" alt="image-outils-utilisé">
                    <img src="{{ asset('Front/img/vendor-9') }}.jpg" alt="image-outils-utilisé">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="{{ route('home') }}" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                        </a>
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos
                            sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet
                            et kasd eos duo.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy;
                            <a class="text-white border-bottom" href="https://yaroumhr.website">
                                yaroumhr.website.
                            </a>
                            All Rights Reserved. Designed by
                            <a class="text-white border-bottom" href="https://yaroumhr.website">YAROU MHR</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('Front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('Front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('Front/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('Front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('Front/js/main.js') }}"></script>

    @stack('modals')
    @livewireScripts
</body>

</html>
