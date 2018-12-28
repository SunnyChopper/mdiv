@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3 class="text-center">What You Will Get</h3>
			</div>
		</div>

		<div class="row mt-32">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="icon-box">
					<i class="fas fa-video centered"></i>
					<h4 class="text-center mt-16">Premium Content</h4>
					<p class="text-center">Join the MillionaireDivision community for free and get access to premium content that's only available for our members.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="icon-box">
					<i class="fas fa-users centered"></i>
					<h4 class="text-center mt-16">Community Access</h4>
					<p class="text-center">Network with like minded people who want to start an online business just like you. Team up and work on projects together.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="icon-box">
					<i class="fas fa-book centered"></i>
					<h4 class="text-center mt-16">Free Intro Course</h4>
					<p class="text-center">Not sure if you're ready to start? No problem. Take our free introductory course and see if an online business is right for you.</p>
				</div>
			</div>
		</div>

		{{-- <div class="row mt-32">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="" class="btn btn-primary centered">Join for Free <i class="fas fa-arrow-right" style="margin-left: 8px;"></i></a>
			</div>
		</div> --}}
	</div>

	<div class="theme-row p-64 p-16-mobile pt-64-mobile pb-64-mobile">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
					<h2 class="text-center white">Over 200,000 People Helped</h2>
					<p class="text-center white">MillionaireDivision started off as just a vision to help motivate and educate. Today, it's got over 200,000 followers and growing everyday. We help motivate and then educate our followers to help them achieve their dreams and aspirations. You can be the next one to achieve your goals.</p>
				</div>
			</div>
		</div>

		{{-- <div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="" class="btn btn-primary centered">Achieve My Goals <i class="fas fa-arrow-right" style="margin-left: 8px;"></i></a>
			</div>
		</div> --}}
	</div>

	@if(count($posts) >= 3)
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3 class="text-center mb-64">Latest Tips and Advice</h3>
				</div>
			</div>

			@foreach($posts as $post)
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="image-box">
						<div class="image-box-image set-bg" data-setbg="{{ $post->featured_image_url }}">
						</div>
						<div class="image-box-info">
							<h4>{{ $post->title }}</h4>
							<p>{{ substr(strip_tags($post->body), 0, 128) }}...</p>
							<a href="post/{{ $post->id }}/{{ $post->slug }}">Read More</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	@endif

	<div style="background-color : rgba(0, 0, 0, 0.025) !important;">
	<div class="container pt-64 pb-64">
		<div class="row center-content">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-32">
				<img src="http://cjgdigitalmarketing.com/wp-content/uploads/2014/11/online-business-promotion.jpg" class="regular-image shadow">
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin: auto;">
				<h3 class="mt-16	-mobile">Not sure which online business you should start?</h3>
				<p>Every single person is different. What works for one person may not work for another. We all have different personalities and often enough we are attempting to start businesses that don't align with our natural personalities. <b>That's where our free Online Business Explorer Tool can help you.</b></p>
				<p>Simply sign up and take a quiz. It will tell you which type of online business you should start based on your answers. It will also give you some example businesses to look at for inspiration and ideas.</p>
				{{-- <a href="" class="btn btn-primary mt-16">Get Access</a> --}}
			</div>
		</div>
	</div>
</div>
@endsection