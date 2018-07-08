<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchTerms extends Model
{
    //
    protected $table='searchterms';
    protected $fillable =['name', 'score'];


    public static function searchterms(){
      return static::inRandomOrder()->limit(5)->get();
    }

}
