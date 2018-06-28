<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Newsapi extends Model
{
    protected $table='newsapi';
    protected $fillable = ['source_id','source_name','author','title','description','url','urlToImage','published_at','category','country','topic','featured','score'];


}
