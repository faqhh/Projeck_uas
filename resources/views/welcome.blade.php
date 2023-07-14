<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome4</title>
        <link rel="stylesheet" href="{{ asset('welcome/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('welcome/assets/css/fontawesome.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <!-- Start Section 2 - The Intro Section -->
        <section id="home" class="intro-section">
            <div class="container">
                <div class="row align-items-center text-white">
                    <!-- Start the Content for the Intro -->
                    <div class="col-md-6 intros text-start">
                        <h1 class="display-2">
                            <span class="display-2--intro">Hey!, Welcome!!</span>
                        </h1>
                        <!-- Button Login -->
                        @if (Route::has('login'))
                            <div class="mt-4">
                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary ml-4">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-primary ml-4">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        <!-- End Button Login -->
                        <button type="button" class="rounded-pill btn-rounded mt-4">Get in Touch
                            <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                    <!-- Start the Content for the Video -->
                    <div class="col-md-6 intros text-end">
                        <div class="video-box">
                            <img src="{{ asset('welcome/images/arts/intro-section-illustration.png') }}"
                                alt="video illustration" class="img-fluid">
                            <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
                                <span><i class="fas fa-play-circle"></i></span>
                                <span class="border-animation border-animation--border-1"></span>
                                <span class="border-animation border-animation--border-2"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- End Section 2 - The Intro Section -->

        <!-- Start Section 3 - The Companies Section -->
        <section id="companies" class="companies">
            <div class="container">
                <div class="row text-center">
                    <h4 class="fw-bold lead mb-3">Trusted by companies like</h4>
                    <div class="heading-line mb-5"></div>
                </div>
            </div>
            <!-- Start the Companies Content -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-2">
                        <div class="companies__logo-box shadow-sm">
                            <img src="{{ asset('welcome/images/campanies/campany-1.png') }}" alt="Company 1 logo"
                                title="Company 1 Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="companies__logo-box shadow-sm">
                            <img src="{{ asset('welcome/images/campanies/campany-2.png') }}" alt="Company 2 logo"
                                title="Company 2 Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="companies__logo-box shadow-sm">
                            <img src="{{ asset('welcome/images/campanies/campany-3.png') }}" alt="Company 3 logo"
                                title="Company 3 Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="companies__logo-box shadow-sm">
                            <img src="{{ asset('welcome/images/campanies/campany-4.png') }}" alt="Company 4 logo"
                                title="Company 4 Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="companies__logo-box shadow-sm">
                            <img src="{{ asset('welcome/images/campanies/campany-5.png') }}" alt="Company 5 logo"
                                title="Company 5 Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="companies__logo-box shadow-sm">
                            <img src="{{ asset('welcome/images/campanies/campany-6.png') }}" alt="Company 6 logo"
                                title="Company 6 Logo" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section 3 - The Companies Section -->

        <script src="{{ asset('welcome/assets/vendors/js/glightbox.min.js') }}"></script>

        <script type="text/javascript">
            const lightbox = GLightbox({
                'touchNavigation': true,
                'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
                'type': 'video',
                'source': 'youtube', //vimeo, youtube or local
                'width': 900,
                'autoPlayVideos': 'true',
            });

        </script>
        <script src="{{ asset('welcome/assets/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
