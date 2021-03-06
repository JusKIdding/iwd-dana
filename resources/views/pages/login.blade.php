@extends('layouts.base')

@section('content')
  {{-- <div class="container">
  	<div class="row">
  		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
  			<h2>Sign in or Sign up</h2>
  			<ul class="nav nav-tabs">
  				<li class="active"><a data-toggle="tab" href="#signin">Sign in</a></li>
  				<li><a data-toggle="tab" href="#signup">Sign up</a></li>
  			</ul>

  			<div class="tab-content">
  				<div id="signin" class="tab-pane fade in active">
  					<h3>SIGN IN</h3>
            @if ($errors->any())
              <div class="alert alert-danger">
              <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
              </ul>
              </div>
            @endif

  					<form role="Form" method="POST" action="user/login" accept-charset="UTF-8">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

  						<div class="form-group">
  							<input type="text" name="email" placeholder="Email..." class="form-control">
  						</div>
  						<div class="form-group">
  							<input type="password" name="password" placeholder="Password..." class="form-control">
  						</div>
  						<div class="form-group">
  							<label>
  								<input type="checkbox" name="remember"> Remember me
  							</label>
  						</div>
  						<div class="form-group">
  							<button type="submit" class="btn btn-default">Submit</button>
  						</div>
  					</form>
  				</div>
  				<div id="signup" class="tab-pane fade">
  					<h3>SIGN UP</h3>
  					<p>You will receive an email to verify your account.</p>

            @if ($errors->any())
              <div class="alert alert-danger">
              <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
              </ul>
              </div>
            @endif

  					<form role="Form" method="POST" action="register" accept-charset="UTF-8">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <input type="text" name="name" placeholder="Name..." class="form-control">
              </div>
  						<div class="form-group">
  							<input type="text" name="email" placeholder="Email..." class="form-control">
  						</div>
  						<div class="form-group">
  							<input type="password" name="password" placeholder="Password..." class="form-control">
  						</div>
  						<div class="form-group">
  							<input type="password" name="password_confirmation" placeholder="Verify password..." class="form-control">
  						</div>
  						<div class="form-group">
  							<button type="submit" class="btn btn-default">Submit</button>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  </div> --}}

  <body class="login-layout">
    <div class="main-container">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <div class="center">
                <h1>
                  <i class="ace-icon fa fa-leaf green"></i>
                  <span class="red">Run</span>
                  <span class="white" id="id-text2">4Love</span>
                </h1>
                <h4 class="blue" id="id-company-text">&copy; KDU UC Universiti</h4>
              </div>

              <div class="space-6"></div>

              <div class="position-relative">
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-coffee green"></i>
                        Please Enter Your Information
                      </h4>

                      <div class="space-6"></div>

                      <form role="Form" method="POST" action="user/login" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" name="email" class="form-control" placeholder="Username" />
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" name="password" class="form-control" placeholder="Password" />
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>

                          <div class="space"></div>

                          <div class="clearfix">
                            <label class="inline">
                              <input type="checkbox" class="ace" />
                              <span class="lbl"> Remember Me</span>
                            </label>

                            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary" >
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

                      <form role="Form" method="POST" action="register" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="email" name="email" class="form-control" placeholder="Email" />
                              <i class="ace-icon fa fa-envelope"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" name="name" class="form-control" placeholder="Username" />
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" name="password" class="form-control" placeholder="Password" />
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" />
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

                            <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
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
              </div><!-- /.position-relative -->

              {{-- <div class="navbar-fixed-top align-right">
                <br />
                &nbsp;
                <a id="btn-login-dark" href="#">Dark</a>
                &nbsp;
                <span class="blue">/</span>
                &nbsp;
                <a id="btn-login-blur" href="#">Blur</a>
                &nbsp;
                <span class="blue">/</span>
                &nbsp;
                <a id="btn-login-light" href="#">Light</a>
                &nbsp; &nbsp; &nbsp;
              </div> --}}
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.main-content -->
    </div><!-- /.main-container -->
  </body>
@endsection

@section('view-styles')
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/fonts.googleapis.com.css') }}" />

  <!-- ace styles -->
  <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ace-rtl.min.css')  }}" />
@endsection

@section('view-scripts')
  <script>
    jQuery(function($) {
     $(document).on('click', '.toolbar a[data-target]', function(e) {
      e.preventDefault();
      var target = $(this).data('target');
      $('.widget-box.visible').removeClass('visible');//hide others
      $(target).addClass('visible');//show target
     });
    });
  </script>
@endsection
