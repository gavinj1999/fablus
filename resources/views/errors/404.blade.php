@extends('kikoe.template')
@section('content')
  <section class="not-found first" style="padding-top: 218px;">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12">
  						<div class="code">
  							404
  						</div>
  						<h1>Page could not be found</h1>
  						<p class="lead">The page you are looking for is not available please check the url you are going to.</p>
  						<div class="search-form">
  							<form>
  								<div class="form-group">
  									<div class="input-group">
  										<input type="text" name="q" class="form-control" placeholder="Type something ...">
  										<div class="input-group-btn">
  											<button class="btn btn-primary">Search</button>
  										</div>
  									</div>
  								</div>
  							</form>
  							<div class="link">
  								or <a href="index.html">back to home</a>.
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</section>
@endsection
