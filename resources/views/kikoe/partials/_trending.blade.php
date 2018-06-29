<div class="col-md-6 col-sm-6 trending-tags">
  <h1 class="title-col">Trending Tags</h1>
  <div class="body-col">
    <ol class="tags-list">
      @foreach($topics as $topic)
      <li><a href="#">{{$topic->topic}}</a></li>
    @endforeach
    </ol>
  </div>
</div>
