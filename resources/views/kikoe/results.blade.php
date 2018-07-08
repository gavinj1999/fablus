@extends('kikoe.template')
@section('content')
  <section class="search first" style="padding-top: 218px;">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-3">
  						<aside>
  							<h2 class="aside-title">Search</h2>
  							<div class="aside-body">
  								<p>Search with other keywords or use filters for more accurate results.</p>
  								<form>
  									<div class="form-group">
  										<div class="input-group">
  											<input type="text" name="q" class="form-control" placeholder="Type something ..." value="hello">
  											<div class="input-group-btn">
  												<button class="btn btn-primary">
  													<i class="ion-search"></i>
  												</button>
  											</div>
  										</div>
  									</div>
  								</form>
  							</div>
  						</aside>
  						<aside>
  							<h2 class="aside-title">Filter</h2>
  							<div class="aside-body">
  								<form class="checkbox-group">
  									<div class="group-title">Date</div>
  									<div class="form-group">
  										<label><div class="iradio_square-red checked" style="position: relative;"><input type="radio" name="date" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Anytime</label>
  									</div>
  									<div class="form-group">
  										<label><div class="iradio_square-red" style="position: relative;"><input type="radio" name="date" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Today</label>
  									</div>
  									<div class="form-group">
  										<label><div class="iradio_square-red" style="position: relative;"><input type="radio" name="date" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Last Week</label>
  									</div>
  									<div class="form-group">
  										<label><div class="iradio_square-red" style="position: relative;"><input type="radio" name="date" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Last Month</label>
  									</div>
  									<br>
  									<div class="group-title">Categories</div>
  									<div class="form-group">
  										<label><div class="icheckbox_square-red checked" style="position: relative;"><input type="checkbox" name="category" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> All Categories</label>
  									</div>
  									<div class="form-group">
  										<label><div class="icheckbox_square-red" style="position: relative;"><input type="checkbox" name="category" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Lifestyle</label>
  									</div>
  									<div class="form-group">
  										<label><div class="icheckbox_square-red" style="position: relative;"><input type="checkbox" name="category" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Travel</label>
  									</div>
  									<div class="form-group">
  										<label><div class="icheckbox_square-red" style="position: relative;"><input type="checkbox" name="category" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Computer</label>
  									</div>
  									<div class="form-group">
  										<label><div class="icheckbox_square-red" style="position: relative;"><input type="checkbox" name="category" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Film</label>
  									</div>
  									<div class="form-group">
  										<label><div class="icheckbox_square-red" style="position: relative;"><input type="checkbox" name="category" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0; cursor: pointer;"></ins></div> Sport</label>
  									</div>
  								</form>
  							</div>
  						</aside>
  					</div>
  					<div class="col-md-9">
  						<div class="nav-tabs-group">
  							<ul class="nav-tabs-list">
  								<li class="active"><a href="#">All</a></li>
  								<li><a href="#">Latest</a></li>
  								<li><a href="#">Popular</a></li>
  								<li><a href="#">Trending</a></li>
  								<li><a href="#">Videos</a></li>
  							</ul>
  							<div class="nav-tabs-right">
  								<select class="form-control">
  									<option>Limit</option>
  									<option>10</option>
  									<option>20</option>
  									<option>50</option>
  									<option>100</option>
  								</select>
  							</div>
  						</div>
  						<div class="search-result">
  							Search results for keyword "{{$term}}" found in {{$count}} posts.
  						</div>
  						<div class="row">
  							@include('kikoe.partials._resultlist')
  		          <div class="col-md-12 text-center">

  		            <div class="pagination-help-text">
  		            	{{$results->links()}}
  		            </div>
  		          </div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</section>
@endsection
