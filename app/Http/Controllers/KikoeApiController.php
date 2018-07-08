<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsapi;
use App\Newscategory;

class KikoeApiController extends Controller
{
    public function allNews(Request $request){
      $data = Newsapi::all();
      return($data);
    }
    public function articleCategories($category){
      $data = Newsapi::where('category',$category)->get();
      return($data);
    }
    public function allArticleCategories(){
      $data = NewsApi::all();
      return($data);
    }
    public function allCategories(){
      $data = Newscategory::all();
      return($data);
    }
    public function article($id){
      $data = Newsapi::where('id',$id)->first();
      return($data);
    }
}
