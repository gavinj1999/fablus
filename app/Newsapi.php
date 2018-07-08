<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Newsapi extends Model
{
    protected $table='newsapi';
    protected $fillable = ['source_id','source_name','author','title','description','url','urlToImage','published_at','category','country','topic','featured','score','slug'];

    public static function liveArticles(){
      return static::inRandomOrder()->where('featured', 0)->where('created_at', '>', Carbon::now()->subMinutes(30)->toDateTimeString())->whereNotNull('urlToImage')->limit(30)->paginate(12);
    }

    public static function featured(){
      return static::inRandomOrder()->where('featured', 1)->limit(4)->get();
    }

    public static function hotNews(){
      return static::limit(12)->orderBy('score', 'DESC')->get();
    }

    public static function megamenu(){
      return static::where('megamenu', 1)->get();
    }

    public static function botw(){
      return static::where('botw', 1)->get();
    }

}
