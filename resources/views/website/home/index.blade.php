<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Get Detailed Information on Top Colleges, Courses & Exams in India. Get alerts about Ranking, Cutoff, Placements, Fees & Admissions of 32,100+ Colleges & Universities.">
	<meta name="keywords" content="AdmissionX, education, colleges, universities, engineering, mba, medical, mbbs, study abroad">
	<meta name="robots" content="index, follow">
	<meta property="og:title" content="AdmissionX.com">
	<meta property="og:site_name" content="AdmissionX.com">
	<meta property="og:url" content="https://www.admissionx.com">
	<title>AdmissionX | Welcome Aboard! Discover Colleges, University, Courses, Institutes, Exams, Career for Higher Education in India</title>
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon.png">
	{!! Html::style('home-layout/assets/css/plugins/bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('home-layout/assets/css/style.css') !!}
	{!! Html::style('home-layout/assets/css/headers/header-v6.css') !!}
	{!! Html::style('home-layout/assets/css/footers/footer-v2.css') !!}
	{!! Html::style('home-layout/assets/plugins/font-awesome/css/font-awesome.min.css') !!}
	{!! Html::style('home-layout/assets/css/homeLayoutCustom.css') !!}
	{!! Html::script('home-layout/assets/plugins/jquery/jquery.min.js') !!}
</head>
<body class="header-fixed">
	@if(Auth::check())
		@if(Auth::user()->userrole_id == '3')
			@include('website/home-layouts.student-headerv6')
		@else
			@include('website/home-layouts.headerv6')
		@endif
	@else
		@include('website/home-layouts.headerv6')
	@endif

	<div class="interactive-slider-v2 lesspadding100">
		<div class="container">
			@if(Session::has('checkEmailSucess'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>{{ Session::get('checkEmailSucess') }}</strong>
			</div>
			@endif
			<h1 class="font-size50">Welcome aboard!</h1>
			<form method="GET" action="/explore/college" class="sky-form sky-form-no-block padding-top10">
				<div class="row">
					<div class="col-xs-12 col-sm-2 col-md-2">
						<label class="select">
							<select name="country_id[]" class="form-control country_id rounded">
								<option selected disabled>Country</option>
								@if($countryObj)
									<option value="99">India</option>
									@foreach($countryObj as $item)
										<option value="{{ $item->id }}">{{ $item->name }}</option>
									@endforeach
								@endif
							</select>
						</label>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-2">
						<label class="select">
							<select name="state_id[]" class="form-control state_id rounded">
								<option selected disabled>State</option>
							</select>
						</label>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-2">
						<label class="select">
							<select name="city_id[]" class="form-control city_id rounded">
								<option selected disabled>City</option>
							</select>
						</label>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-2">
						<label class="select">
							<select name="functionalarea_id[]" class="functionalarea_id rounded">
								<option selected disabled>Stream</option>
								@if($functionalAreaObj)
									<option value="1">Engineering</option>
									<option value="6">Management</option>
									<option value="11">Pharmacy</option>
									@foreach($functionalAreaObj as $item)
										<option value="{{ $item->id }}">{{ $item->name }}</option>
									@endforeach
								@endif
							</select>
						</label>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-2">
						<label class="select">
							<select name="degree_id[]" class="degree_id rounded">
								<option selected disabled>Degree</option>
							</select>
						</label>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-2">
						<label class="select">
							<select name="course_id[]" class="form-control course_id rounded">
								<option selected disabled>Branch</option>
							</select>
						</label>
					</div>
				</div>
				<h1 class="font-size30">OR</h1>
				<div class="row padding-bottom20">
					<div class="col-xs-12 col-md-6 col-md-offset-3">
						<label class="input">
							<input id="field_id" name="field_id" type="hidden">
							<input type="text" class="form-control rounded" name="collegeName" id="field" placeholder="Enter College Name">
						</label>
					</div>
				</div>
				<div class="row margin-top20">
					<div class="col-md-4 col-md-offset-4">
						<button class="btn btn-block btn-u browseCollege">Browse College</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	@if(sizeof($getHomeBannerAds) > 0)
	<div class="container margin-top30">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ $getHomeBannerAds[0]->redirectto }}" target="_blank">
					<img src="{{ asset('assets/ads-banner/'.$getHomeBannerAds[0]->img) }}" class="img-responsive img-thumbnail">
				</a>
			</div>
		</div>
	</div>
	@endif

	<div class="purchase">
		<div class="container overflow-h">
			<div class="row">
				<div class="col-md-6">
					<div class="heading heading-v4">
						<h2 class="text-green-color">Student</h2>
					</div>
					<div class="responsive-video box-shadow">
						<iframe src="https://player.vimeo.com/video/217462459" width="640" height="360" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<div class="heading heading-v4">
						<h2 class="text-green-color">College</h2>
					</div>
					<div class="responsive-video box-shadow">
						<iframe src="https://player.vimeo.com/video/217462695" width="640" height="360" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-color-light">
		<div class="container">
			@if(sizeof($getCollegesInfoObj) > 0)
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="headline">
						<h4>COLLEGES</h4>
					</div>
				</div>
			</div>
			@endif
			<div class="row featured-blog">
				@foreach($getCollegesInfoObj as $item)
				<div class="col-xs-12 col-sm-6 col-md-3 margin-bottom60">
					<a href="{{ URL::to('college', $item->slug) }}" class="text-deco-none">
						@if($item->logoImageName != '')
							<div class="featuredCollegeBlock" style="background-image: url('{{asset('gallery/')}}/{{ $item->slug }}/{{ $item->logoImageName }}');">
						@else
							<div class="featuredCollegeBlock" style="background-image: url('{{asset('assets/images')}}/no-college-logo.png');">
						@endif
							<div class="feature-college-overlay">
								<div class="feature-desc">
									<h4>{{ $item->firstname}}</h4>
									@if($item->cityName)
										<div>{{ $item->cityName }}, {{ $item->stateName }}</div>
									@endif
								</div>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<div class="container">
		@if(sizeof($getBlogsObj) > 0)
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="headline">
					<h4>BLOGS</h4>
				</div>
			</div>
		</div>
		@endif
		<div class="row featured-blog">
			@foreach($getBlogsObj as $item)
			<div class="col-xs-12 col-sm-6 col-md-3 margin-bottom60">
				<a href="{{ URL::to('blogs', $item['slug']) }}" class="text-deco-none">
					@if($item['featimage'] != '')
						<div class="featuredCollegeBlock" style="background-image: url('/blogs/{{ $item['featimage'] }}');">
					@else
						<div class="featuredCollegeBlock" style="background-image: url('/blogs/default.jpg');">
					@endif
						<div class="feature-blog-overlay">
							<div class="feature-desc">
								<h4>{{ $item['topic'] }}</h4>
								<small>BY {{ $item['firstname'] }}</small>
								<div>{{ str_limit(strip_tags($item['description']), 90) }}</div>
								<div class="text-center">
									<a href="{{ URL::to('blogs', $item['slug']) }}" class="btn-u btn-u-xs">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>

	<div class="testimonials-clients clearfix">
		<div class="tc-testimonials">
			<div class="testimonials-v6">
				<div class="owl-item testimonials-v6-item">
					<div class="g-display-table">
						<div class="g-display-td">
							<img class="thumbnail" src="/testimonial/-1492688781.jpg" alt="Student">
						</div>
						<div class="g-display-td">
							<strong>Shubham Singh, Patna</strong>
						</div>
					</div>
					<blockquote>It's a great platform to search institutions and also reserve seats in different courses. Thumbs Up to the AdmissionX team.</blockquote>
				</div>
			</div>
		</div>
	</div>

	@include('website/home-layouts.footer')

	{!! Html::script('home-layout/assets/plugins/bootstrap/js/bootstrap.min.js') !!}
	{!! Html::script('home-layout/assets/js/custom.js') !!}
	{!! Html::script('home-layout/assets/js/app.js') !!}

	<script>
	$('.functionalarea_id').on('change', function(){
		var currentID = $(this).val();
		$.ajax({
			method: "GET",
			data: {currentID: currentID},
			url: "{{ URL::to('getAllDegreeName') }}",
			success: function(data) {
				var HTML = '<option selected disabled>Degree</option>';
				if(data.code == '200'){
					$.each(data.degreeObj, function(i, item) {
						HTML += '<option value="'+item.degreeId+'">'+item.name+'</option>';
					});
				}
				$('.degree_id').html(HTML);
			}
		});
	});

	$('.country_id').on('change', function(){
		var countryID = $(this).val();
		$.ajax({
			method: "GET",
			data: {countryID: countryID},
			url: "{{ URL::to('getAllStateName') }}",
			success: function(data) {
				var HTML = '<option selected disabled>State</option>';
				if(data.code == '200'){
					$.each(data.stateObj, function(i, item) {
						HTML += '<option value="'+item.stateId+'">'+item.name+'</option>';
					});
				}
				$('.state_id').html(HTML);
			}
		});
	});

	$('.state_id').on('change', function(){
		var currentID = $(this).val();
		$.ajax({
			method: "GET",
			data: {currentID: currentID},
			url: "{{ URL::to('getAllCityName') }}",
			success: function(data) {
				var HTML = '<option selected disabled>City</option>';
				if(data.code == '200'){
					$.each(data.cityObj, function(i, item) {
						HTML += '<option value="'+item.cityId+'">'+item.name+'</option>';
					});
				}
				$('.city_id').html(HTML);
			}
		});
	});
	</script>
</body>
</html>
