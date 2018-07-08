<div class="line"><div>You May Also Like</div></div>
<div class="row">

  @foreach($related as $rel)
  <article class="article related col-md-6 col-sm-6 col-xs-12">
    <div class="inner">
      <figure>
        <a href="#">
          <img src="{{$rel->urlToImage or setting('kiko.kikoe_placehold360')}}">
        </a>
      </figure>
      <div class="padding">
        <h2><a href="{{$rel->url}}">{{$rel->title}}</a></h2>
        <div class="detail">
          <div class="category"><a href="category.html">Lifestyle</a></div>
          <div class="time">{{Carbon\Carbon::parse($rel->published_at)->diffForHumans()}}</div>
        </div>
      </div>
    </div>
  </article>
@endforeach
</div>
<div class="line thin"></div>
