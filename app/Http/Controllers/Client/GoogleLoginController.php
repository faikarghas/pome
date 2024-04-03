<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->email)->first();

        if(!$user)
        {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id'=> $googleUser->id,
                'password' => \Hash::make(rand(100000,999999))
            ]);
        }

        Auth::login($user);

        return redirect()->intended('/');
    }
}