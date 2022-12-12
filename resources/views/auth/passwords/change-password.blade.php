<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ark Design- Change Pssword') }}</title>

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
            <form method="POST" action="{{ route('admin.update-password') }}" autocomplete="off">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/logo.jpg') }}" alt="" class="h-50px rounded-circle"/>
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">
                        Change Password
                    </h1>
                    <!--end::Title-->

                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->

                <div class="mb-10">
                    <label class="form-label fw-bold text-dark fs-6 mb-0" for="current_password">Current Password</label>
                    <input id="current_password" type="password"
                           class="form-control form-control-lg border-0 @error('current_password') is-invalid @enderror"
                           name="current_password"
                           required>

                    @error('current_password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-10">
                    <label class="form-label fw-bold text-dark fs-6 mb-0" for="password">New Password</label>
                    <input id="password" type="password"
                           class="form-control form-control-lg border-0 @error('password') is-invalid @enderror"
                           name="password"
                           required>

                    @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-10">
                    <label class="form-label fw-bold text-dark fs-6 mb-0" for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" type="password"
                           class="form-control form-control-lg border-0 @error('password_confirmation') is-invalid @enderror"
                           name="password_confirmation"
                           required>

                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
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



