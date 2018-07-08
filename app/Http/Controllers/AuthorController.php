<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite;


class AuthorController extends Controller
{
    public function index(){
      return view ('kikoe.register');
    }

    public function authorlogin(){

      return view('kikoe.authorlogin');
    }

    public function twitterLogin(){
      return \Socialite::with('twitter')->redirect();
    }
    public function facebookLogin(){
      return \Socialite::with('facebook')->redirect();
    }
    public function githubLogin(){
      return \Socialite::with('github')->redirect();
    }


    public function generateUUID(){

    }
}
