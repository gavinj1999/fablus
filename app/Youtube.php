<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Youtube extends Model
{
    protected $table='youtube';
    protected $fillable =['videoid'];



    public static function trend(){
      return static::limit(4)->inRandomOrder()->get();
    }
    public static function feat(){
      return static::where('featured', 1)->get();
    }


}
