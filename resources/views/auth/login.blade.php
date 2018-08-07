@extends('auth.layouts.app')

@section('title')
Login Page
@endsection

@section('content')
<div id="login-box" class="login-box visible widget-box no-border">
	<div class="widget-body">
		<div class="widget-main">
			<h4 class="header blue lighter bigger">
				<i class="ace-icon fa fa-coffee green"></i>
				Please Enter Your Information
			</h4>

			<div class="space-6"></div>

			<form method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
				<fieldset>
					<label class="block clearfix{{ $errors->has('email') ? ' has-error' : '' }}">
						<span class="block input-icon input-icon-right">
							<input type="email" class="form-control" name="email" placeholder="Email" required autofocus />
							<i class="ace-icon fa fa-user"></i>
							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</span>
					</label>

					<label class="block clearfix{{ $errors->has('password') ? ' has-error' : '' }}">
						<span class="block input-icon input-icon-right">
							<input name="password" type="password" class="form-control" placeholder="Password" required autofocus />
							<i class="ace-icon fa fa-lock"></i>
							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</span>
					</label>

					<div class="space"></div>

					<div class="clearfix">
						<label class="inline">
							<input type="checkbox" class="ace" />
							<span class="lbl"> Remember Me</span>
						</label>

						<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
							<i class="ace-icon fa fa-key"></i>
							<span class="bigger-110">Login</span>
						</button>
					</div>

					<div class="space-4"></div>
				</fieldset>
			</form>
      <div class="social-or-login center">
				<span class="bigger-110">Or Login Using</span>
			</div>

			<div class="space-6"></div>

			<div class="social-login center">
				<a class="btn btn-primary">
					<i class="ace-icon fa fa-facebook"></i>
				</a>

				<a class="btn btn-info">
					<i class="ace-icon fa fa-twitter"></i>
				</a>

				<a class="btn btn-danger">
					<i class="ace-icon fa fa-google-plus"></i>
				</a>
			</div>
		</div><!-- /.widget-main -->
    <div class="toolbar clearfix">
  		<div>
  			<a href="#" data-target="#forgot-box" class="forgot-password-link">
  				<i class="ace-icon fa fa-arrow-left"></i>
  				I forgot my password
  			</a>
  		</div>

  		<div>
  			<a href="#" data-target="#signup-box" class="user-signup-link">
  				I want to register
  				<i class="ace-icon fa fa-arrow-right"></i>
  			</a>
  		</div>
  	</div>
	</div><!-- /.widget-body -->
</div><!-- /.login-box -->
<div id="forgot-box" class="forgot-box widget-box no-border">
	<div class="widget-body">
		<div class="widget-main">
			<h4 class="header red lighter bigger">
				<i class="ace-icon fa fa-key"></i>
				Retrieve Password
			</h4>

			<div class="space-6"></div>
			<p>
				Enter your email and to receive instructions
			</p>

			<form>
				<fieldset>
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input type="email" class="form-control" placeholder="Email" />
							<i class="ace-icon fa fa-envelope"></i>
						</span>
					</label>

					<div class="clearfix">
						<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
							<i class="ace-icon fa fa-lightbulb-o"></i>
							<span class="bigger-110">Send Me!</span>
						</button>
					</div>
				</fieldset>
			</form>
		</div><!-- /.widget-main -->

		<div class="toolbar center">
			<a href="#" data-target="#login-box" class="back-to-login-link">
				Back to login
				<i class="ace-icon fa fa-arrow-right"></i>
			</a>
		</div>
	</div><!-- /.widget-body -->
</div><!-- /.forgot-box -->

<div id="signup-box" class="signup-box widget-box no-border">
	<div class="widget-body">
		<div class="widget-main">
			<h4 class="header green lighter bigger">
				<i class="ace-icon fa fa-users blue"></i>
				New User Registration
			</h4>

			<div class="space-6"></div>
			<p> Enter your details to begin: </p>

			<form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
				<fieldset>
					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
							<i class="ace-icon fa fa-envelope"></i>
						</span>
					</label>

					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Your Name">
							<i class="ace-icon fa fa-user"></i>
						</span>
					</label>

					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input id="password" type="password" class="form-control" name="password" required placeholder="Password">
							<i class="ace-icon fa fa-lock"></i>
						</span>
					</label>

					<label class="block clearfix">
						<span class="block input-icon input-icon-right">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repat Password">
							<i class="ace-icon fa fa-retweet"></i>
						</span>
					</label>

					<label class="block">
						<input type="checkbox" class="ace" />
						<span class="lbl">
							I accept the
							<a href="#">User Agreement</a>
						</span>
					</label>

					<div class="space-24"></div>

					<div class="clearfix">
						<button type="reset" class="width-30 pull-left btn btn-sm">
							<i class="ace-icon fa fa-refresh"></i>
							<span class="bigger-110">Reset</span>
						</button>

						<button type="button" class="width-65 pull-right btn btn-sm btn-success">
							<span class="bigger-110">Register</span>

							<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
						</button>
					</div>
				</fieldset>
			</form>
		</div>

		<div class="toolbar center">
			<a href="#" data-target="#login-box" class="back-to-login-link">
				<i class="ace-icon fa fa-arrow-left"></i>
				Back to login
			</a>
		</div>
	</div><!-- /.widget-body -->
</div><!-- /.signup-box -->
@endsection