<aside>
  <h1 class="aside-title">Popular <a href="#" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
  <div class="aside-body">
      @foreach($liveArticles as $article)
    <article class="article-mini">
      <div class="inner">
        <figure>
          <a href="/article/{{$article->slug}}">
            <img src="{{$article->urlToImage or '/storage/'.setting('kiko.missing_320')}}" alt="Sample Article">
          </a>
        </figure>
        <div class="padding">
          <h1><a href="/article/{{$article->slug}}">{{$article->title}}</a></h1>
          <p>
            {{Carbon\Carbon::parse($article->published_at)->diffForHumans()}}
          </p>
        </div>
      </div>
    </article>
    @endforeach
  </div>
</aside>
