@foreach($botw as $b)
<article class="article">
  <div class="inner">
    <figure>
      <a href="/article/{{$b->slug}}">
        <img src="{{$b->urlToImage}}" alt="Sample Article">
      </a>
    </figure>
    <div class="padding">
      <div class="detail">
          <div class="time">{{Carbon\Carbon::parse($b->published_at)->diffForHumans()}}</div>
          <div class="category"><a href="/category/{{$b->category}}">{{$b->category}}</a></div>
      </div>
      <h2><a href="/article/{{$b->slug}}">{{$b->title}}</a></h2>
      <div class="badge">{{$b->source_name}}</div>
    </div>
  </div>
</article>
@endforeach
