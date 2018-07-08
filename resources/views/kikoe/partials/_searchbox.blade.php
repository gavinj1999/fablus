<form class="search" autocomplete="off" method="get" action="/results">
  <div class="form-group" >
    <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Type something here">
          <div class="input-group-btn">
          <button class="btn btn-primary"><i class="ion-search"></i></button>
        </div>
    </div>
  </div>
  <div class="help-block">
    <div>Popular:</div>
    <ul>
      @foreach($searchterms as $term)
      <li><a href="/results?q={{$term->name}}">{{$term->name}}<span>({{$term->score}})</span></a></li>
      @endforeach
    </ul>
  </div>
</form>
