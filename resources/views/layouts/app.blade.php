<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ark Design') }}</title>
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">

</head>
<body class="min-vh-100 d-flex justify-content-between">
<div>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.jpg') }}" class="h-50px rounded-circle" alt="">
                <span class="h1 text-dark"> Ark Design</span>
            </a>
            <button class="navbar-toggler rounded-0 border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3 custom-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold nav-home text-uppercase h4 border-bottom border-3 border-primary hover:tw-border-secondary"
                           href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold nav-about text-uppercase h4 border-bottom border-3 border-primary hover:tw-border-secondary"
                           href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold nav-projects text-uppercase h4 border-bottom border-3 border-primary hover:tw-border-secondary"
                           href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold nav-events text-uppercase h4 border-bottom border-3 border-primary hover:tw-border-secondary"
                           href="{{ route('events') }}">Events & News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold nav-contacts text-uppercase h4 border-bottom border-3 border-primary hover:tw-border-secondary"
                           href="{{ url('/') }}#contact-us">Contact Us</a>
                    </li>
                    @guest()
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold nav-contacts text-uppercase h4 border-bottom border-3 border-primary hover:tw-border-secondary"
                               href="{{ url('/login') }}">Login</a>
                        </li>
                    @endguest
                    @auth()
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-bold nav-contacts text-uppercase h4 border-bottom border-3 border-primary hover:tw-border-secondary"
                               href="{{ route('admin.dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                    @endauth

                </ul>

            </div>
        </div>
    </nav>
    @yield('content')
</div>

<!--footer-->
<footer class="footer  bg-dark text-white p-4">
    <div class="container text-center">
        <p class="text">Copyright &copy;
            <script>
                document.write(new Date().getUTCFullYear());
            </script>
            Ark Design| All Rights Reserved
        </p>
        <div class="d-flex gap-5 align-items-center justify-content-center">
            <a href="" class="center ">
                <i class="bi hover:tw-text-primary bi-facebook fs-1"></i>
            </a>
            <a href="" class="center ">
                <i class="bi hover:tw-text-primary bi-youtube fs-1"></i>
            </a>
            <a href="" class="center ">
                <i class="bi hover:tw-text-primary bi-instagram fs-1"></i>
            </a>
            <a href="" class="center ">
                <i class="bi hover:tw-text-primary bi-twitter fs-1"></i>
            </a>
        </div>
    </div>
</footer>
<!--end footer-->

{{--back to top--}}
<div class="back-to-top position-fixed tw-bottom-6 tw-right-6 text-primary cursor-pointer">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="tw-w-10 tw-h-10">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>

</div>
{{--end back to top--}}


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')

<script>
    $(document).ready(function () {
        //back to top
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });
        $('.back-to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
        //end back to top

        //active nav
        let url = window.location.href;
        if (url.includes('about')) {
            $('.nav-about').addClass('active');
        } else if (url.includes('projects')) {
            $('.nav-projects').addClass('active');
        } else if (url.includes('events')) {
            $('.nav-events').addClass('active');
        } else if (url.includes('contact')) {
            $('.nav-contacts').addClass('active');
        } else {
            $('.nav-home').addClass('active');
        }
        //end active nav
    });
</script>
</body>
</html>
