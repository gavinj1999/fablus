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
            <a href="{{$article->url}}">
              <img src="{{$article->urlToImage or '/storage/'.setting('kiko.missing_320')}}" alt="{{$article->title}}">
            </a>
          </figure>
          <div class="padding">
            <div class="detail">
              <div class="time">{{$article->published_at}}</div>
              <div class="category"><a href="category.html">{{$article->source_name}}</a></div>
            </div>
            <h2><a href="{{$article->url}}">{{$article->title}}</a></h2>
            <p>{{$article->description}}</p>
            <footer>
              <a href="#" id="love_{{$article->id}}" onclick="love({{$article->id}})" class="love"><i class="ion-android-favorite-outline"></i> <div>{{$article->score}}</div></a>
              <a class="btn btn-primary more" href="{{$article->url}}">
                <div>More</div>
                <div><i class="ion-ios-arrow-thin-right"></i></div>
              </a>
            </footer>
          </div>
        </div>

      </article>

    @endforeach

    </div>

  </div>

@endforeach
{{ $liveArticles->links() }}
</div>
