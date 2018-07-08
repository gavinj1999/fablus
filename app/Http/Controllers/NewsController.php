<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsapi;
use App\Newscategory;

class NewsController extends Controller
{
  public function index(){
    $categories = Newscategory::all();
    return view('vendor.voyager.newsmanager.browse')
    ->with('categories',$categories);
  }




}
