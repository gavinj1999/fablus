<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Newscategory extends Model
{
  protected $fillable = ['name'];
  public static function cats(){
    return static::select('name')->get();;
  }
}
