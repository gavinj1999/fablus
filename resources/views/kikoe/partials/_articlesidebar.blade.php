{{-- sidebar --}}
<div class="col-md-4 sidebar" id="sidebar">
						<aside>
							<div class="aside-body">
								<figure class="ads">
									<img src="images/ad.png">
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
												<img src="{{$featured->urlToImage}}">
											</a>
										</figure>
										<div class="details">
											<h1><a href="{{$featured->slug}}">{{$featured->title}}</a></h1>
											<p>
											{{$featured->description}}
											</p>
											<div class="detail">
												<div class="time">{{Carbon\Carbon::parse($featured->published_at)->diffForHumans()}}</div>
												<div class="category"><a href="/category/{{$featured->category}}">Lifestyle</a></div>
											</div>
										</div>
									</div>
								</article>
								<div class="line"></div>
								@foreach($related as $rel)
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="/article/{{$featured->slug}}">
												<img src="{{$rel->urlToImage}}">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="/article/{{$rel->slug}}">{{$rel->title}}</a></h1>
											<div class="detail">
												<div class="category"><a href="/category/{{$rel->category}}">{{$rel->category}}</a></div>
												<div class="time">{{ Carbon\Carbon::parse($featured->published_at)->diffForHumans() }}</div>
											</div>
										</div>
									</div>
								</article>
							@endforeach
							</div>
						</aside>
						<aside>
							<div class="aside-body">
@include('kikoe.partials._newsletter')
							</div>
						</aside>
					</div>
					{{-- sidebar --}}
