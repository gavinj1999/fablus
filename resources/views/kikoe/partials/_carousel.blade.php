<div class="owl-carousel owl-theme slide" id="featured">

  @foreach($featured as $article)
  <div class="item">
    <article class="featured">
      <div class="overlay"></div>
      <figure>
        <img src="{{$article->urlToImage}}" alt="Sample Article">
      </figure>
      <div class="details">
        <div class="category"><a href="category.html">{{$article->category}}</a></div>
        <h1><a href="single.html">{{$article->title}}</a></h1>
        <div class="time">{{$article->published_at}}</div>
      </div>
    </article>
  </div>
@endforeach

</div>
