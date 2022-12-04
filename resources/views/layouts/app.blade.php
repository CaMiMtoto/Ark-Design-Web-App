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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @yield('styles')
</head>
<body class="min-vh-100 d-flex justify-content-between">
<div>
    <nav class="navbar navbar-expand-lg bg-warning navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.jpg') }}" class="h-50px rounded-circle" alt="">
                <span class="h4"> Ark Design</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events') }}">Events & News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

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
            <a href="" class="center">
                <i class="bi bi-facebook fs-1"></i>
            </a>
            <a href="" class="center">
                <i class="bi bi-youtube fs-1"></i>
            </a>
            <a href="" class="center">
                <i class="bi bi-instagram fs-1"></i>
            </a>
            <a href="" class="center">
                <i class="bi bi-twitter fs-1"></i>
            </a>
        </div>
    </div>
</footer>
<!--end footer-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
