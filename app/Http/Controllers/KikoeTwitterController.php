<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class KikoeTwitterController extends Controller
{

    public static function trendList()
    {
        $at = config('ttwitter.ACCESS_TOKEN');
        $ats = config('ttwitter.ACCESS_TOKEN_SECRET');
        $ck = config('ttwitter.CONSUMER_KEY');
        $cs = config('ttwitter.CONSUMER_SECRET');

        $connection = new TwitterOAuth($ck, $cs, $at, $ats);
        $result = $connection->get('trends/place', ['id' => '30720']);
        $trends = array_slice($result[0]->trends,0 , 10);
        return($trends);
    }

    public static function searchTerm($term){
      $at = config('ttwitter.ACCESS_TOKEN');
      $ats = config('ttwitter.ACCESS_TOKEN_SECRET');
      $ck = config('ttwitter.CONSUMER_KEY');
      $cs = config('ttwitter.CONSUMER_SECRET');

      $connection = new TwitterOAuth($ck, $cs, $at, $ats);
      $twee = $connection->get("search/tweets", ["q" => $term]);

      return ($twee->statuses);
    }
}
