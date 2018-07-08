<div class="col-md-6 col-sm-6 trending-tags">
  <h1 class="title-col">Trending Tags</h1>
  <div class="body-col">
    <ol class="tags-list">
      @foreach($trending as $trend)
      <li><a href="{{$trend->url}}">{{$trend->name}}</a></li>
    @endforeach
    </ol>
  </div>
</div>
