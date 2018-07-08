<div class="line">
  <div>Latest News</div>
</div>
<div class="row">

  @foreach($liveArticles->shuffle()->chunk(2) as $chunk)

  <div class="col-md-12 col-sm-12 col-xs-12">

    <div class="row">
      @foreach($chunk as $article)
      <article class="article col-md-6">

        <div class="inner">
          <figure>
            <a href="/article/{{$article->slug}}">
              <img src="{{$article->urlToImage or '/storage/'.setting('kiko.missing_320')}}" alt="{{$article->title}}">
            </a>
          </figure>
          <div class="padding">
            <div class="detail">
              <div class="time">{{Carbon\Carbon::parse($article->published_at)->diffForHumans()}}</div>
              <div class="category"><a href="category.html">{{$article->source_name}}</a></div>
            </div>
            <h2><a href="/article/{{$article->slug}}">{{$article->title}}</a></h2>
            <p>{{$article->description}}</p>
@include('kikoe.partials._cardfooter')
          </div>
        </div>

      </article>

    @endforeach

    </div>

  </div>

@endforeach
{{ $liveArticles->links() }}
</div>
