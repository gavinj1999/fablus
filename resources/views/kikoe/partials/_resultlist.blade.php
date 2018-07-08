@foreach($results as $res)
<article class="col-md-12 article-list">
  <div class="inner">
    <figure>
      <a href="single.html">
        <img src="{{$res->urlToImage}}">
      </a>
    </figure>
    <div class="details">
      <div class="detail">
        <div class="category">
          <a href="#">{{$res->category}}</a>
        </div>
        <time>{{Carbon\Carbon::parse($res->published_at)->diffForHumans()}}</time>
      </div>
      <h1><a href="/article/{{$res->slug}}">{{$res->title}}</a></h1>
      <p>
      {{$res->description}}
      </p>
      <footer>
        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>{{$res->score}}</div></a>
        <a class="btn btn-primary more" href="single.html">
          <div>More</div>
          <div><i class="ion-ios-arrow-thin-right"></i></div>
        </a>
      </footer>
    </div>
  </div>
</article>
@endforeach
