@extends('kikoe.template')
@section('content')
  <section class="category first" style="padding-top: 218px;">
  		  <div class="container">
  		    <div class="row">
  		      <div class="col-md-8 text-left">
  		        <div class="row">
  		          <div class="col-md-12">
  		            <ol class="breadcrumb">
  		              <li><a href="#">Home</a></li>
  		              <li class="active">{{$cat}}</li>
  		            </ol>
  		            <h1 style="text-transform:capitalize;" class="page-title">Category: {{$cat}}</h1>
  		            <p class="page-subtitle">Showing all posts with category <i>{{$cat}}</i></p>
  		          </div>
  		        </div>
  		        <div class="line"></div>
  		        <div class="row">
                @foreach($articles as $article)
  		          <article class="col-md-12 article-list">
  		            <div class="inner">
  		              <figure>
  			              <a href="{{$article->url}}">
  			                <img src="{{$article->urlToImage}}">
  		                </a>
  		              </figure>
  		              <div class="details">
  		                <div class="detail">
  		                  <div class="category">
  		                   <a href="category.html">{{$article->category}}</a>
  		                  </div>
  		                  <div class="time">December 26, 2016</div>
  		                </div>
  		                <h1><a href="{{$article->url}}">{{$article->title}}</a></h1>
  		                <p>
  		                  {{$article->description}}
  		                </p>
  		                <footer>
  		                  <a href="#" onclick="love({{$article->id}})"  class="love"><i class="ion-android-favorite-outline"></i> <div>{{$article->score}}</div></a>
  		                  <a class="btn btn-primary more" href="{{$article->url}}">
  		                    <div>More</div>
  		                    <div><i class="ion-ios-arrow-thin-right"></i></div>
  		                  </a>
  		                </footer>
  		              </div>
  		            </div>
  		          </article>
              @endforeach
  		          <div class="col-md-12 text-center">
  		         {{$articles->links()}}
  		          </div>
  		        </div>
  		      </div>
  		      <div class="col-md-4 sidebar">
  		        <aside>
  		          <div class="aside-body">
  		            <figure class="ads">
  			            <a href="single.html">
  			              <img src="images/ad.png">
  			            </a>
  		              <figcaption>Advertisement</figcaption>
  		            </figure>
  		          </div>
  		        </aside>
  		        <aside>
  		          <h1 class="aside-title">Recent Post</h1>
  		          <div class="aside-body">
  		            <article class="article-fw">
  		              <div class="inner">
  		                <figure>
  			                <a href="single.html">
  			                  <img src="images/news/img12.jpg">
  			                </a>
  		                </figure>
  		                <div class="details">
  		                  <h1><a href="single.html">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</a></h1>
  		                  <p>
  		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		                    tempor incididunt ut labore et dolore magna aliqua.
  		                  </p>
  		                  <div class="detail">
  		                    <div class="time">December 26, 2016</div>
  		                    <div class="category"><a href="category.html">Lifestyle</a></div>
  		                  </div>
  		                </div>
  		              </div>
  		            </article>
  		            <div class="line"></div>
  		            <article class="article-mini">
  		              <div class="inner">
  		              <figure>
  			              <a href="single.html">
  			                <img src="images/news/img05.jpg">
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
  			                  <img src="images/news/img02.jpg">
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
  			                  <img src="images/news/img13.jpg">
  		                  </a>
  		                </figure>
  		                <div class="padding">
  		                  <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
  		                  <div class="detail">
  		                    <div class="category"><a href="category.html">International</a></div>
  		                    <div class="time">December 20, 2016</div>
  		                  </div>
  		                </div>
  		              </div>
  		            </article>
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
  		      </div>
  		    </div>
  		  </div>
  		</section>
@endsection
