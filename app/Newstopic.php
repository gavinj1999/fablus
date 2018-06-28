<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newstopic extends Model
{
    protected $table='newstopics';

    protected $fillable=['topic'];
}
