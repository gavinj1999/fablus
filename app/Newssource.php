<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newssource extends Model
{
    //
    protected $fillable = (['sourceid','name','description','url','category','language','country']);
}
