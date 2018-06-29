<div class="col-md-6 col-sm-6">
  <h1 class="title-col">
    Hot News
    <div class="carousel-nav" id="hot-news-nav">
      <div class="prev">
        <i class="ion-ios-arrow-left"></i>
      </div>
      <div class="next">
        <i class="ion-ios-arrow-right"></i>
      </div>
    </div>
  </h1>
  <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
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
  </div>
</div>
