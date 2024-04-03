<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class FacebookLoginController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
        $user = User::where('facebook_id', $facebookUser->id)->first();

        if(!$user)
        {
            $user = User::create([
                'name' => $facebookUser->name,
                'facebook_id'=> $facebookUser->id,
                'password' => \Hash::make(rand(100000,999999))
            ]);
        }

        Auth::login($user);

        return redirect()->intended('/');
    }
}