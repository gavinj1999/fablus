@extends('kikoe.template')
@section('content')
  <section class="login first grey" style="padding-top: 218px;">
			<div class="container">
				<div class="box-wrapper">
					<div class="box box-border">
						<div class="box-body">
							<h4>Login</h4>
							<form>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Password
										<a href="forgot.html" class="pull-right">Forgot Password?</a>
									</label>
									<div style="position:relative"><input type="password" name="password" class="form-control" style="padding-right: 60px;"><input type="hidden" id="passeye-0"><div class="btn btn-primary btn-sm" id="passeye-toggle-0" style="position:absolute;right:10px;top:50%;transform:translate(0,-50%);-webkit-transform:translate(0,-50%);-o-transform:translate(0,-50%);padding: 2px 7px;font-size:12px;cursor:pointer;">Show</div></div>
								</div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block">Login</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Don't have an account?</span> <a href="register">Create one</a>
								</div>
								<div class="title-line">
									or
								</div>
              	<a href="/author/facebook" class="btn btn-social btn-block facebook"><i class="ion-social-facebook"></i> Login with Facebook</a>
                <a href="/author/twitter" class="btn btn-social btn-block twitter"><i class="ion-social-twitter"></i> Login with Twitter</a>
                <a href="/author/github" class="btn btn-social btn-block github"><i class="ion-social-github"></i> Login with Github</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection
