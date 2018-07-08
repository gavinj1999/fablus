<div class="owl-carousel owl-theme slide" id="featured">

  @foreach($featured as $article)
  <div class="item">
    <article class="featured">
      <div class="overlay"></div>
      <figure>
        <img src="{{$article->urlToImage}}" alt="Sample Article">
      </figure>
      <div class="details">
        <div class="category"><a href="/category/{{$article->category}}">{{$article->category}}</a></div>
        <h1><a href="/article/{{$article->slug}}">{{$article->title}}</a></h1>
        <div class="time">{{Carbon\Carbon::parse($article->published_at)->diffForHumans()}}</div>
      </div>
    </article>
  </div>
@endforeach

</div>
