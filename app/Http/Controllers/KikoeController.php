<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Newsapi;
use App\Newssource;
use App\Newstopic;
use App\Newscategory;
use App\Youtube;
use GuzzleHttp;
use GuzzleHttp\Client;
use Slack;
use File;
use Thujohn\Twitter\Facades\Twitter as Twitter;

class KikoeController extends Controller
{
    public function index()
    {
        $liveArticles = NewsApi::inRandomOrder()->where('featured', 0)->limit(30)->paginate(6);
        $featured = NewsApi::inRandomOrder()->where('featured', 1)->limit(4)->get();
        $topics = Newstopic::limit(10)->get();
        $hotNews = NewsApi::limit(12)->orderBy('score', 'DESC')->get();
        $youtube = Youtube::where('featured', 1)->get();
        $categories = Newscategory::select('name')->get();

        Slack::send('Kikoe Home Page Viewed'.$this->remoteIp());
        return view('kikoe.index')
        ->with('liveArticles', $liveArticles)
        ->with('featured', $featured)
        ->with('topics', $topics)
        ->with('hotNews', $hotNews)
        ->with('youtube', $youtube)
        ->with('categories', $categories);
    }


    public function allTopHeadlines()
    {
        $type = 1;
        $country = collect([
    'gb',
    'us'
  ]);
        $category = collect([
    'business',
    'entertainment',
    'general',
    'health',
    'science',
    'sports',
    'technology'
  ]);
        foreach ($country as $c) {
            foreach ($category as $d) {
                $this->apiCall($c, $d, $type);
            }
        }
    }



    public function apiCall($country, $category, $type)
    {
        $baseUrl = 'https://newsapi.org/v2/top-headlines?';

        $apiKey = '&apiKey=41713b9a8f5b45c6a2ff57974adb5511';

        if ($type == "1") {
            $url = $baseUrl.'country='.$country.'&category='.$category.$apiKey;
        } elseif ($type == "2") {
            return(2);
        };

        $results= file_get_contents($url);

        $data = (json_decode($results, true));

        $articles = $data['articles'];
        $i = 0;
        foreach ($articles as $key=>$article) {
            //dd($article['source']['id']);
            if ($i===0) {
                $featured=1;
            } else {
                $featured=0;
            }
            $art = Newsapi::firstOrCreate(
            [
              'url' => $article['url']
            ],
            [
              'source_id' => $article['source']['id'],
              'source_name' => $article['source']['name'],
              'author' => $article['author'],
              'title' => $article['title'],
              'description' => $article['description'],
              'url' => $article['url'],
              'urlToImage' => $article['urlToImage'],
              'published_at' => $article['publishedAt'],
              'category' => $category,
              'featured' => $featured,
              'source' => '$source',
              'topic' => '$category',
              'country' => '$country',
              'attribution' => 'Powered by NewsAPI.org.',
          ]
          );
            $i++;
        }
    }

    public function category($cat)
    {
        $categories = Newscategory::select('name')->get();
        $articles = Newsapi::where('category', $cat)->paginate(8);
        $featured = NewsApi::where('featured', 1)->limit(3)->get();
        Slack::send('Kikoe Category '. $cat . ' Page Viewed: '.$this->remoteIp());
        return view('kikoe.categories')
        ->with('categories', $categories)
        ->with('articles', $articles)
        ->with('featured', $featured)
        ->with('cat', $cat);
    }

    public function adminFeed()
    {
        $sources = Newssource::all();

        return view('vendor.voyager.feeds.browse')
      ->with('sources', $sources);
    }

    public function score($id)
    {
        $existingScore = Newsapi::select('score')->where('id', $id)->first();

        $oldScore = ($existingScore->score);

        $score = Newsapi::find($id);

        $score->score = $oldScore + 1;
        $score->save();
    }

    public function updateMultiFeeds(Request $request)
    {
        return ($request);
    }

    public function carbonDate($datestring)
    {
    }

    public function tweetMe()
    {
        $randy = rand(5, 50);
        $uploaded_media = Twitter::uploadMedia(['media' => File::get('storage/kikoe/34CL2yGPnAnzT0mpAB1lIzgkwMTWH7hQ0F7NYOS6.jpeg')]);
        return Twitter::postTweet(['status' => 'twitter with more media is beautiful', 'media_ids' => $uploaded_media->media_id_string]);
    }
    public function twitback()
    {
        return response::json('success');
    }

    public function getYouTube()
    {
      $url = 'https://www.googleapis.com/youtube/v3/videos?part=contentDetails&chart=mostPopular&regionCode=GB&key=AIzaSyALY36lq3sXLodHa8FX482-Tpr-jrdxBFU';
      $results= file_get_contents($url);

      $data = (json_decode($results, true));

      $vids = ($data['items']);

      foreach($vids as $vid){
    echo($vid['id'].'<br />');
      }
    }

    public function remoteIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return($ip);
    }
}
