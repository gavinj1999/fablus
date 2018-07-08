@extends('kikoe.template')
@section('content')
  <section class="home">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="headline">
            <div class="nav" id="headline-nav">
              <a class="left carousel-control" role="button" data-slide="prev">
                <span class="ion-ios-arrow-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" role="button" data-slide="next">
                <span class="ion-ios-arrow-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="owl-carousel owl-theme" id="headline">
              <div class="item">
                <a href="#"><div class="badge">Tip!</div> Vestibulum ante ipsum primis in faucibus orci</a>
              </div>
              <div class="item">
                <a href="#">Ut rutrum sodales mauris ut suscipit</a>
              </div>
            </div>
          </div>
          @include('kikoe.partials._carousel')
          @include('kikoe.partials._latestnews')
          @include('kikoe.partials._banner')
          <div class="line transparent little"></div>
          <div class="row">
          @include('kikoe.partials._trending')
          @include('kikoe.partials._hotnews')
          </div>
          <div class="line top">
            <div>Just Another News</div>
          </div>
          <div class="row">
            @include('kikoe.partials._another')

          </div>
        </div>
        @include('kikoe.partials._sidebar')
      </div>
    </div>
  </section>


      <!-- Pagination -->


      @endsection
