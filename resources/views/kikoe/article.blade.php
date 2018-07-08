@extends('kikoe.template')
@section('content')
  <section class="single first" style="padding-top: 218px;">
  			<div class="container">
  				<div class="row">
  					@include('kikoe.partials._articlesidebar')
  					<div class="col-md-8">
  						<ol class="breadcrumb">
  						  <li><a href="#">Home</a></li>
  						  <li class="active">Film</li>
  						</ol>
  						<article class="article main-article">
  							<header>
  								<h1>{{$article->title}}</h1>
  								<ul class="details">
  									<li>Posted on 31 December, 2016</li>
  									<li><a>{{$article->category}}</a></li>
  									<li>By <a href="{{$article->url}}">{{$article->author or $article->source_name}}  </a></li>
  								</ul>
  							</header>
  							<div class="main">
  								<p>{{$article->description}}</p>
  								<div class="featured">
  									<figure>
  										<img src="{{$article->urlToImage}}">
  										<figcaption><strong>{{$article->title}}</strong></figcaption>
  									</figure>
  								</div>
                  @include('kikoe.partials._articlecontent')
  							</div>
  							<footer>
  								<div class="col">
  									<ul class="tags">
  										<li><a href="{{$article->url}}">{{$article->source_name}} <i class="fas fa-external-link-alt"></i></a></li>
                      <li><a href="#">{{$article->published_at}}</a></li>

  									</ul>
  								</div>
  								<div class="col">

                      <a href="#" id="love_{{$article->id}}" onclick="love({{$article->id}})" class="love"><i class="ion-android-favorite-outline"></i> <div>{{$article->score}}</div></a>
  								</div>
  							</footer>
  						</article>
  						<div class="sharing">
  						<div class="title"><i class="ion-android-share-alt"></i> Sharing is caring</div>
  							<ul class="social">
  								<li>
  									<a href="#" class="facebook">
  										<i class="ion-social-facebook"></i> Facebook
  									</a>
  								</li>
  								<li>
  									<a href="#" class="twitter">
  										<i class="ion-social-twitter"></i> Twitter
  									</a>
  								</li>
  								<li>
  									<a href="#" class="googleplus">
  										<i class="ion-social-googleplus"></i> Google+
  									</a>
  								</li>
  								<li>
  									<a href="#" class="linkedin">
  										<i class="ion-social-linkedin"></i> Linkedin
  									</a>
  								</li>
  								<li>
  									<a href="#" class="skype">
  										<i class="ion-ios-email-outline"></i> Email
  									</a>
  								</li>
  								<li class="count">
  									20
  									<div>Shares</div>
  								</li>
  							</ul>
  						</div>
  						<div class="line">
  							<div>Author</div>
  						</div>
  						<div class="author">
  							<figure>
  								<img src="images/img01.jpg">
  							</figure>
  							<div class="details">
  								<div class="job">Web Developer</div>
  								<h3 class="name">John Doe</h3>
  								<p>Nulla sagittis rhoncus nisi, vel gravida ante. Nunc lobortis condimentum elit, quis porta ipsum rhoncus vitae. Curabitur magna leo, porta vel fringilla gravida, consectetur in libero. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
  								<ul class="social trp sm">
  									<li>
  										<a href="#" class="facebook">
  											<svg><rect></rect></svg>
  											<i class="ion-social-facebook"></i>
  										</a>
  									</li>
  									<li>
  										<a href="#" class="twitter">
  											<svg><rect></rect></svg>
  											<i class="ion-social-twitter"></i>
  										</a>
  									</li>
  									<li>
  										<a href="#" class="youtube">
  											<svg><rect></rect></svg>
  											<i class="ion-social-youtube"></i>
  										</a>
  									</li>
  									<li>
  										<a href="#" class="googleplus">
  											<svg><rect></rect></svg>
  											<i class="ion-social-googleplus"></i>
  										</a>
  									</li>
  								</ul>
  							</div>
  						</div>
@include('kikoe.partials._youmaylike')
  						@include('kikoe.partials._disqus')
  					</div>
  				</div>
  			</div>
  		</section>
@endsection
