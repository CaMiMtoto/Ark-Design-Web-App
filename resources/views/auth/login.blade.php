<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ark Design') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column flex-lg-row-fluid py-10">
    <!--begin::Content-->
    <div class="">
        <!--begin::Wrapper-->
        <div class="w-sm-500px p-10 p-md-15 mx-auto">
            <!--begin::Form-->
            <form method="POST" action="{{ route('login') }}" autocomplete="off">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/logo.jpg') }}" alt="" class="h-50px rounded-circle"/>
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Sign In to Ark Design</h1>
                    <!--end::Title-->

                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <label class="form-label fs-6 fw-bold text-dark">Email</label>
                    <input id="email" type="email"
                           class="form-control form-control-lg  border-0  @error('email') is-invalid @enderror"
                           name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bold text-dark fs-6 mb-0" for="password">Password</label>
                        <!--end::Label-->
                        <!--begin::Link-->
                        <a href="{{ route('password.request') }}"
                           class="link-primary fs-6 fw-bold">Forgot Password ?</a>
                        <!--end::Link-->
                    </div>

                    <input id="password" type="password"
                           class="form-control form-control-lg border-0 @error('password') is-invalid @enderror"
                           name="password"
                           required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <!--end::Input group-->

                <div class="form-check mb-10">
                    <input class="form-check-input" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <!--begin::Actions-->
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Continue</span>
                    </button>
                    <!--end::Submit button-->
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->

</div>

</body>
</html>



