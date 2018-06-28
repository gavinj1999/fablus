@foreach($hotNews as $hot)
<article class="article-mini">
  <div class="inner">
    <figure>
      <a href="single.html">
        <img src="{{$hot->urlToImage}}" alt="Sample Article">
      </a>
    </figure>
    <div class="padding">
      <h1><a href="single.html">{{$hot->title}}</a></h1>
      <div class="detail">
        <div class="category"><a href="category.html">{{$hot->category}}</a></div>
        <div class="time">December 22, 2016</div>
      </div>
    </div>
  </div>
</article>
@endforeach
