<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use App\Newsapi;
use App\Newstopic;
use App\Newscategory;
use App\SearchTerms;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        view()->composer('kikoe.template', function($view){
          $view->with('liveArticles', NewsApi::liveArticles())
                  ->with('featured', NewsApi::featured())
                  ->with('topics', Newstopic::topics())
                  ->with('hotNews', NewsApi::hotNews())
                  ->with('categories', Newscategory::cats())
                  ->with('megamenu', Newsapi::megamenu())
                  ->with('botw', Newsapi::botw())
                  ->with('searchterms', SearchTerms::searchterms());


        });




    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
