<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Newsapi;
use App\Newssource;
use App\Newstopic;
use App\Newscategory;
use App\Youtube;
use App\SearchTerms;
use GuzzleHttp;
use GuzzleHttp\Client;
use Auth;
use Slack;
use File;
use Newsletter;
use Carbon\Carbon;
use Thujohn\Twitter\Facades\Twitter as Twitter;
use j7mbo\TwitterAPIExchangeTest;
use App\Http\Controllers\KikoeTwitterController;

class KikoeController extends Controller
{
    public function index()
    {

        $liveArticles = NewsApi::liveArticles();
        $featured = NewsApi::featured();
        $hotNews = NewsApi::hotNews();
        $topics = Newstopic::topics();
        $youtube = Youtube::trend();
        $youtubefeat = Youtube::feat();
        $categories = Newscategory::cats();
        $trending = KikoeTwitterController::trendList();
        $megamenu = Newsapi::megamenu();
        $botw = Newsapi::botw();

        Slack::send('Kikoe Home Page Viewed'.$this->remoteIp());
        return view('kikoe.index')
        ->with('liveArticles', $liveArticles)
        ->with('featured', $featured)
        ->with('topics', $topics)
        ->with('hotNews', $hotNews)
        ->with('youtube', $youtube)
        ->with('categories', $categories)
        ->with('youtubefeat', $youtubefeat)
        ->with('youtube', $youtube)
        ->with('trending',$trending);
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

    public function apisearch($searchterm)
    {
        $baseUrl = 'https://newsapi.org/v2/everything?';

        $apiKey = '&apiKey=41713b9a8f5b45c6a2ff57974adb5511';

        $url = $baseUrl.'q='.urlencode($searchterm).$apiKey;

        $results= file_get_contents($url);

        $data = (json_decode($results, true));

        $articles = $data['articles'];

        $cat = Newscategory::firstOrCreate(
          ['name'=> $searchterm],
          [
            'name'=> $searchterm,
          ]
        );

        $i = 0;
        foreach ($articles as $key=>$article) {
          $articleImage = ($article['urlToImage']);
          if(isset($articleImage)){
            $artImage = $article['urlToImage'];
          } else {
            $artimage = 'no_image';
          }

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
              'urlToImage' => $artImage,
              'published_at' => $this->dateConvert($article['publishedAt']),
              'category' => $searchterm,
              'featured' => $featured,
              'source' => '$source',
              'topic' => '$category',
              'country' => '$country',
              'attribution' => 'Powered by NewsAPI.org.',
              'slug' => (str_slug($article['title'], '_')),
          ]
          );
            $i++;
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
          $articleImage = ($article['urlToImage']);
          if(isset($articleImage)){
            $artImage = $article['urlToImage'];
          } else {
            $artimage = 'no image';
          }

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
              'urlToImage' => $artImage,
              'published_at' => $this->dateConvert($article['publishedAt']),
              'category' => $category,
              'featured' => $featured,
              'source' => '$source',
              'topic' => '$category',
              'country' => '$country',
              'attribution' => 'Powered by NewsAPI.org.',
              'slug' => (str_slug($article['title'], '_')),
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

        foreach ($vids as $vid) {
            $youtube = Youtube::firstorcreate(
            [
          'videoid' => $vid['id'],
        ],
        [
          'videoid'=> $vid['id'],
        ]
        );
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

    public function article($slug)
    {
        $liveArticles = $this->NewsArticles();
        $featured = NewsApi::inRandomOrder()->where('featured', 1)->whereNotNull('urlToImage')->limit(1)->first();
        $topics = Newstopic::limit(10)->get();
        $hotNews = NewsApi::limit(12)->orderBy('score', 'DESC')->get();
        $youtube = Youtube::where('featured', 1)->get();
        $categories = Newscategory::select('name')->get();
        $youtube = Youtube::limit(4)->inRandomOrder()->get();
        $article = Newsapi::where('slug', $slug)->first();
        $relcat = ($article->category);
        $related = Newsapi::where('category', $relcat)->inRandomOrder()->limit(2)->get();

        Slack::send('Kikoe article Page Viewed'.$this->remoteIp());
        return view('kikoe.article')
      ->with('liveArticles', $liveArticles)
      ->with('featured', $featured)
      ->with('topics', $topics)
      ->with('hotNews', $hotNews)
      ->with('youtube', $youtube)
      ->with('categories', $categories)
      ->with('youtube', $youtube)
      ->with('article', $article)
      ->with('related', $related);
    }

    public function NewsArticles()
    {
        $liveArticles = NewsApi::inRandomOrder()->where('featured', 0)->whereNotNull('urlToImage')->limit(30)->paginate(6);
        return($liveArticles);
    }

    public function newsletter(Request $request){

      Newsletter::subscribe('rincewind@discworld.com');

    }

    public function updateArticle(Request $request){
      $id = $request['id'];

       $title = $request["title"];
       $description = $request["description"];
       $urlToImage = $request["urlToImage"];
       $source_id = $request["source_id"];
       $source_name = $request["source_name"];
       $author = $request["author"];
       $url = $request["url"];
       $published_at = $request["published_at"];
       $attribution = $request["attribution"];
       $featured = (isset($request["featured"])) ? 1 : 0;
       $category = $request["category"];
       $topic = $request["topic"];
       $country = $request["country"];
       $score = $request["score"];
       $slug = $request["slug"];



       $upart = Newsapi::find($id);

       $upart->title = $title;
       $upart->description = $description ;
       $upart->urlToImage = $urlToImage;
       $upart->source_id = $source_id ;
       $upart->source_name = $source_name ;
       $upart->author = $author ;
       $upart->url = $url;
       $upart->published_at = $published_at;
       $upart->attribution = 'Powered by NewsAPI.org';
       $upart->featured = $featured ;
       $upart->category = $category ;
       $upart->topic = $topic ;
       $upart->country = $country ;
       $upart->score = $score ;
       $upart->slug = $slug ;
       $upart->save();

      return back();
    }

    public function results( Request $request){
      $pages = $request['size'];
      $term = $request['q'];
      $termcount = SearchTerms::select('score')->where('name', $term)->first();

      if($termcount){
        $termint = (int)$termcount->score +1;
      }elseif(!$termcount){
        $termint = 1;
      }


      $newterm = SearchTerms::updateOrCreate(
        [
          'name' => $term,
        ],
        [
          'name' =>$term,
          'score' =>$termint,
        ]
      );

      $data = NewsApi::where('description', 'LIKE', '%'.$term.'%')->paginate(25);
      $count = (count(NewsApi::where('description', 'LIKE', '%'.$term.'%')->get()));

      return view('kikoe.results')
      ->with('results',$data)
      ->with('term', $term)
      ->with('count',$count);
    }

    public function dateConvert($dateString)
    {

    $UTCstring = new Carbon($dateString);
    return($UTCstring->toDateTimeString());


    }

    public function logout(){
      Auth::logout();
      return redirect('/');
    }
}
