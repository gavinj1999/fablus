<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller
{
    public function twitterLogin()
    {
        return \Socialite::with('twitter')->redirect();
    }
    public function facebookLogin()
    {
        return \Socialite::with('facebook')->redirect();
    }
    public function githubLogin()
    {
        return \Socialite::with('github')->redirect();
    }


    public function callback(SocialAccountService $service)
    {
    
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/');
    }
}
