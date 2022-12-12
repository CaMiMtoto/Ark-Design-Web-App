@component('mail::message')
# Hello {{ $user->name }},
You have been created as a user on {{ config('app.name') }}.
Please click the button below to  log in and change your password.
Default password is: <strong>{{ $password }}</strong>
@component('mail::button', ['url' => url('/admin/login')])
   Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
