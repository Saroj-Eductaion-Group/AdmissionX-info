<div class="wrapper">

		<div class="header-v8 header-sticky">

			<div class="blog-topbar">
				<div class="topbar-search-block">
					<div class="container">
						<form action="">
							<input type="text" class="form-control" placeholder="Search">
							<div class="search-close"><i class="icon-close"></i></div>
						</form>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-xs-8">
							<div class="topbar-time visible-xs-block">011-4224-9249 | <a href="mailto:support@admissionx.info">support@admissionx.info</a></div>
						</div>
						<div class="col-sm-4 col-xs-4 clearfix">
							<ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">
								<li class="cd-log_reg home"><a class="cd-signin" href="javascript:void(0);">011-4224-9249</a></li>
								<li class="cd-log_reg"><a class="cd-signup" href="mailto:support@admissionx.info">support@admissionx.info</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<div class="navbar mega-menu" role="navigation">
				<div class="container">

					<div class="res-container">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<div class="navbar-brand">
							<a href="{{ URL::to('/') }}">
								<!-- <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="logoStyle"> -->
								<img class="@if(Auth::check()) logoStyleShrinkLogin @else logoStyleShrink @endif shrink-logo" src="{{asset('assets/images/logo-slogon.png')}}" alt="admissionx logo">
							</a>
						</div>
					</div>


					<div class="collapse navbar-collapse navbar-responsive-collapse" >
						<div class="res-container">
							<ul class="nav navbar-nav">
								<li><a href="{{ URL::to('/') }}">Home</a></li>
								<li><a href="{{ URL::to('engineering/colleges') }}">Engineering</a></li>
								<li><a href="{{ URL::to('medical/colleges') }}">Medical</a></li>
								<li><a href="{{ URL::to('management/colleges') }}">Management</a></li>
								<li><a href="{{ URL::to('examination') }}">Examination</a></li>
								<li><a href="{{ URL::to('study-abroad') }}">Study Abroad</a></li>
								<li><a href="{{ URL::to('counselling') }}">Counselling</a></li>
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										More <span class="caret"></span>
									</a>
									<ul class="dropdown-menu" style="top: auto;">
										<li><a href="{{ URL::to('top-colleges') }}">Top Colleges</a></li>
										<li><a href="{{ URL::to('top-university') }}">Top Universities</a></li>
										<li><a href="{{ URL::to('reviews') }}">Reviews</a></li>
										<li><a href="{{ URL::to('news') }}">News</a></li>
										<li><a href="{{ URL::to('education-blogs') }}">Blogs</a></li>
										<li><a href="{{ URL::to('ask') }}">Ask</a></li>
									</ul>
								</li>
								@if(!Auth::check())
									<li><a class="color-green" data-toggle="modal" data-target="#loginModal" href="">Log In</a></li>
									<li><a class="color-green" data-toggle="modal" data-target="#signUpModel" href="">Sign Up</a></li>
								@else
									<li><a href="{{ URL::to('login') }}">Dashboard</a></li>
									<li class="dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<span class="m-r-sm text-muted welcome-message">Hi, {{ str_limit(Auth::user()->firstname, $limit = 17, $end = '') }}</span>
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu" style="top: auto;">
											<li><a href="{{ URL::to('logout') }}">Logout</a></li>
										</ul>
									</li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
</div>

@section('scripts')
<script type="text/javascript">
	jQuery(document).ready(function() {
		StudentSignUpForm.initStudentSignUpForm();
	});
</script>
@endsection
