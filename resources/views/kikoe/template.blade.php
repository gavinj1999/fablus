<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="KIKOE is an aggregated news site">
		<meta name="author" content="kikoe.co.uk">
		<meta name="keyword" content="news reviews commentary">
		<!-- Shareable -->
		<meta property="og:title" content="Kikoe news" />
		<meta property="og:type" content="article" />
		{{-- <meta property="og:url" content="https://github.com/nauvalazhar/KIKOE" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/KIKOE/master/https://static.fablus.co.uk/images/preview.png" /> --}}
		<title>KIKOE &mdash; News, Views and More &amp; CSS3 Magazine Template</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/sweetalert/dist/sweetalert.css">


		<!--Font-awesome-->
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/all.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/style.css">
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/skins/all.css">
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/demo.css">
		<link rel="stylesheet" href="https://static.fablus.co.uk/css/kikoe.css">
	</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="/">
									<img src="/storage/{{setting('kiko.kikologo')}}" alt="KIKOE Logo">
								</a>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
@include('kikoe.partials._searchbox')
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								@if(Auth::check())
									<li><a href="/logout"><i class="ion-person"></i><div>Logout</div></a></li>
								@else
									<li><a href="/register"><i class="ion-person-add"></i><div>Register</div></a></li>
									<li><a href="/login"><i class="ion-person"></i><div>Login</div></a></li>
								@endif

							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			@include('kikoe.partials._nav')
			<!-- End nav -->
		</header>

		@yield('content')

		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">Best Of The Week</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
@include('kikoe.partials._botw')
				</div>
			</div>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Company Info</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="/storage/{{setting('kiko.kikologo')}}" class="img-responsive" alt="KIKOE Logo">
								</figure>
								<p class="brand-description">
									KIKOE is a HTML5 &amp; CSS3 magazine template based on Bootstrap 3.
								</p>
								<a href="page.html" class="btn btn-KIKOE white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Bootstrap 3</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Creative Mind</a></li>
									<li><a href="#">Standing On The Train</a></li>
									<li><a href="#">at 6.00PM</a></li>
								</ul>
							</div>
						</div>
						<div class="line"></div>

					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Latest News</h1>
							<div class="block-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="https://static.fablus.co.uk/images/news/img12.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Donec consequat lorem quis augue pharetra</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="https://static.fablus.co.uk/images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">eu dapibus risus aliquam etiam ut venenatis</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="https://static.fablus.co.uk/images/news/img15.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum </a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="https://static.fablus.co.uk/images/news/img16.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Proin venenatis pellentesque arcu vitae </a></h1>
										</div>
									</div>
								</article>
								<a href="#" class="btn btn-KIKOE white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Follow Us</h1>
							<div class="block-body">
								<p>Follow us and stay in touch to get the latest news</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
									<li>
										<a href="#" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tumblr">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-tumblr"></i>
										</a>
									</li>
									<li>
										<a href="#" class="dribbble">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-dribbble"></i>
										</a>
									</li>
									<li>
										<a href="#" class="linkedin">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="skype">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-skype"></i>
										</a>
									</li>
									<li>
										<a href="#" class="rss">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-rss"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<div class="block-body no-margin">
								<ul class="footer-nav-horizontal">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="page.html">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; KIKOE 2018. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="https://kodinger.com">Kodinger</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<!-- JS -->
		<script src="https://static.fablus.co.uk/js/jquery.js"></script>
		<script src="https://static.fablus.co.uk/js/jquery.migrate.js"></script>
		<script src="https://static.fablus.co.uk/js/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="https://static.fablus.co.uk/js/jquery.number.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue"></script>
		<script src="https://static.fablus.co.uk/js/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="https://static.fablus.co.uk/js/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="https://static.fablus.co.uk/js/easescroll/jquery.easeScroll.js"></script>
		<script src="https://static.fablus.co.uk/js/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://static.fablus.co.uk/js/toast/jquery.toast.min.js"></script>
		<script src="https://static.fablus.co.uk/js/demo.js"></script>
		<script src="https://static.fablus.co.uk/js/e-magz.js"></script>
		<script>
function love(el){

		$.ajax({
	url:'/api/score/'+el,
	type:'GET',
	success: function(data) {
		console.log('done');
	}

		})
	};

		</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121575848-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121575848-1');
</script>

	</body>
</html>
