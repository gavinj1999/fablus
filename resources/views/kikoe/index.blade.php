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
        <div class="col-xs-6 col-md-4 sidebar" id="sidebar">
          <div class="sidebar-title for-tablet">Sidebar</div>
          <aside>
            <div class="aside-body">
              <div class="featured-author">
                <div class="featured-author-inner">
                  <div class="featured-author-cover" style="background-image: url('https://static.fablus.co.uk/images/news/img15.jpg');">
                    <div class="badges">
                      <div class="badge-item"><i class="ion-star"></i> Featured</div>
                    </div>
                    <div class="featured-author-center">
                      <figure class="featured-author-picture">
                        <img src="https://static.fablus.co.uk/images/img01.jpg" alt="Sample Article">
                      </figure>
                      <div class="featured-author-info">
                        <h2 class="name">John Doe</h2>
                        <div class="desc">@JohnDoe</div>
                      </div>
                    </div>
                  </div>
                  <div class="featured-author-body">
                    <div class="featured-author-count">
                      <div class="item">
                        <a href="#">
                          <div class="name">Posts</div>
                          <div class="value">208</div>
                        </a>
                      </div>
                      <div class="item">
                        <a href="#">
                          <div class="name">Stars</div>
                          <div class="value">3,729</div>
                        </a>
                      </div>
                      <div class="item">
                        <a href="#">
                          <div class="icon">
                            <div>More</div>
                            <i class="ion-chevron-right"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="featured-author-quote">
                      "Eur costrict mobsa undivani krusvuw blos andugus pu aklosah"
                    </div>
                    <div class="block">
                      <h2 class="block-title">Photos</h2>
                      <div class="block-body">
                        <ul class="item-list-round" data-magnific="gallery">
                          <li><a href="https://static.fablus.co.uk/images/news/img06.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img06.jpg');"></a></li>
                          <li><a href="https://static.fablus.co.uk/images/news/img07.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img07.jpg');"></a></li>
                          <li><a href="https://static.fablus.co.uk/images/news/img08.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img08.jpg');"></a></li>
                          <li><a href="https://static.fablus.co.uk/images/news/img09.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img09.jpg');"></a></li>
                          <li><a href="https://static.fablus.co.uk/images/news/img10.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img10.jpg');"></a></li>
                          <li><a href="https://static.fablus.co.uk/images/news/img11.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img11.jpg');"></a></li>
                          <li><a href="https://static.fablus.co.uk/images/news/img12.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img12.jpg');"><div class="more">+2</div></a></li>
                          <li class="hidden"><a href="https://static.fablus.co.uk/images/news/img13.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img13.jpg');"></a></li>
                          <li class="hidden"><a href="https://static.fablus.co.uk/images/news/img14.jpg" style="background-image: url('https://static.fablus.co.uk/images/news/img14.jpg');"></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="featured-author-footer">
                      <a href="#">See All Authors</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <aside>
            <h1 class="aside-title">Popular <a href="#" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
            <div class="aside-body">
                @foreach($liveArticles as $article)
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="{{$article->urlToImage or '/storage/'.setting('kiko.missing_320')}}" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="{{$article->url}}">{{$article->title}}</a></h1>
                  </div>
                </div>
              </article>
              @endforeach
            </div>
          </aside>
          <aside>
            <div class="aside-body">
              <form class="newsletter">
                <div class="icon">
                  <i class="ion-ios-email-outline"></i>
                  <h1>Newsletter</h1>
                </div>
                <div class="input-group">
                  <input type="email" class="form-control email" placeholder="Your mail">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                  </div>
                </div>
                <p>By subscribing you will receive new articles in your email.</p>
              </form>
            </div>
          </aside>
          <aside>
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="active">
                <a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
                  <i class="ion-android-star-outline"></i> Recomended
                </a>
              </li>
              <li>
                <a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
                  <i class="ion-ios-chatboxes-outline"></i> Comments
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="recomended">
                <article class="article-fw">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="https://static.fablus.co.uk/images/news/img16.jpg" alt="Sample Article">
                      </a>
                    </figure>
                    <div class="details">
                      <div class="detail">
                        <div class="time">December 31, 2016</div>
                        <div class="category"><a href="category.html">Sport</a></div>
                      </div>
                      <h1><a href="single.html">Donec congue turpis vitae mauris</a></h1>
                      <p>
                        Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at egestas convallis.
                      </p>
                    </div>
                  </div>
                </article>
                <div class="line"></div>
                <article class="article-mini">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="https://static.fablus.co.uk/images/news/img05.jpg" alt="Sample Article">
                      </a>
                    </figure>
                    <div class="padding">
                      <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                      <div class="detail">
                        <div class="category"><a href="category.html">Lifestyle</a></div>
                        <div class="time">December 22, 2016</div>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="article-mini">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="https://static.fablus.co.uk/images/news/img02.jpg" alt="Sample Article">
                      </a>
                    </figure>
                    <div class="padding">
                      <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                      <div class="detail">
                        <div class="category"><a href="category.html">Travel</a></div>
                        <div class="time">December 21, 2016</div>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="article-mini">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="https://static.fablus.co.uk/images/news/img10.jpg" alt="Sample Article">
                      </a>
                    </figure>
                    <div class="padding">
                      <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                      <div class="detail">
                        <div class="category"><a href="category.html">Healthy</a></div>
                        <div class="time">December 20, 2016</div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="tab-pane comments" id="comments">
                <div class="comment-list sm">
                  <div class="item">
                    <div class="user">
                      <figure>
                        <img src="https://static.fablus.co.uk/images/img01.jpg" alt="User Picture">
                      </figure>
                      <div class="details">
                        <h5 class="name">Mark Otto</h5>
                        <div class="time">24 Hours</div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="user">
                      <figure>
                        <img src="https://static.fablus.co.uk/images/img01.jpg" alt="User Picture">
                      </figure>
                      <div class="details">
                        <h5 class="name">Mark Otto</h5>
                        <div class="time">24 Hours</div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="user">
                      <figure>
                        <img src="https://static.fablus.co.uk/images/img01.jpg" alt="User Picture">
                      </figure>
                      <div class="details">
                        <h5 class="name">Mark Otto</h5>
                        <div class="time">24 Hours</div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          @include('kikoe.partials._video')
          <aside id="sponsored">
            <h1 class="aside-title">Sponsored</h1>
            <div class="aside-body">
              <ul class="sponsored">
                <li>
                  <a href="#">
                    <img src="https://static.fablus.co.uk/images/sponsored.png" alt="Sponsored">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="https://static.fablus.co.uk/images/sponsored.png" alt="Sponsored">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="https://static.fablus.co.uk/images/sponsored.png" alt="Sponsored">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="https://static.fablus.co.uk/images/sponsored.png" alt="Sponsored">
                  </a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>


      <!-- Pagination -->
  {{ $liveArticles->render() }}

      @endsection
