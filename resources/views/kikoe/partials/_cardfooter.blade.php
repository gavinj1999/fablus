<footer>
  <div class="row">


  <div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
      <a href="#" id="love_{{$article->id}}" onclick="love({{$article->id}})" class="love"><i class="ion-android-favorite-outline"></i> <div>{{$article->score}}</div></a>
  </div>
  <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
      {!!Share::page('http://jorenvanhocht.be', 'Your share text can be placed here',['class' => 'my-class', 'data-toggle' => 'modal'])->twitter()->facebook()->linkedin()->googlePlus()!!}
  </div>
  <div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>

    <a class="btn btn-primary more" href="/article/{{$article->slug}}">
      <div>More</div>
      <div><i class="ion-ios-arrow-thin-right"></i></div>
    </a>
  </div>
</div>
</footer>
<script>


</script>
