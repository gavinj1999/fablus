<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class KikoeFeedController extends Controller
{
  public function allNews(Request $request){
    $data = Newsapi::all();
    return($data);
  }
}
