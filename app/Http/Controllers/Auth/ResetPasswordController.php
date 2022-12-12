<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Hash;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected string $redirectTo = RouteServiceProvider::DASHBOARD;

    public function changePassword()
    {
        return view('auth.passwords.change-password');
    }

    public function updatePassword()
    {
        $this->validate(request(), [
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = auth()->user();

        if (Hash::check(request('current_password'), $user->password)) {
            $user->password = Hash::make(request('password'));
            $user->password_changed_at = now();
            $user->save();

            return redirect()->route('admin.dashboard')->with('success', 'Password updated successfully');
        }

        return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect']);
    }
}
