<aside>
  <h1 class="aside-title">Videos
    <div class="carousel-nav" id="video-list-nav">
      <div class="prev"><i class="ion-ios-arrow-left"></i></div>
      <div class="next"><i class="ion-ios-arrow-right"></i></div>
    </div>
  </h1>
  <div class="aside-body">
    <ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
    @foreach ($youtube as $vid)
        <li><a data-youtube-id="{{$vid->videoid}}" data-action="magnific"></a></li>
    @endforeach


    </ul>
  </div>
</aside>
