@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-5">
				<img src="https://sunnychopper.com/img/Profile.jpg" class="regular-image">
				<div class="hidden-sm hidden-xs">
					<h3 class="mt-16 mb-0">{{ $user->first_name }} {{ $user->last_name }}</h3>
					<p>Joined on {{ $user->created_at->format('M jS, Y') }}</p>
					<hr />
					<p class="mb-0"><small><a href="https://www.facebook.com/SunnyChopper"><i class="fab fa-facebook" style="margin-right: 0.5em;"></i> Facebook</a></small></p>
					<p class="mb-0"><small><a href="https://www.twitter.com/SunnyChopper"><i class="fab fa-twitter" style="margin-right: 0.5em;"></i> Twitter</a></small></p>
				</div>
			</div>

			<div class="hidden-lg hidden-md col-sm-8 col-xs-7">
				<h6 class="mt-0 mb-0">{{ $user->first_name }} {{ $user->last_name }}</h6>
				<p><small>Joined on {{ $user->created_at->format('M jS, Y') }}</small></p>
				<p class="mb-0"><small><a href="https://www.facebook.com/SunnyChopper"><i class="fab fa-facebook" style="margin-right: 0.5em;"></i> Facebook</a></small></p>
				<p class="mb-0"><small><a href="https://www.twitter.com/SunnyChopper"><i class="fab fa-twitter" style="margin-right: 0.5em;"></i> Twitter</a></small></p>
			</div>

			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 mt-32-mobile">
				<div class="gray-box">
					<h4>Project Board</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<a href="">
								<div class="background-card set-bg" data-setbg="https://www.gannett-cdn.com/presto/2018/11/21/PBRE/34005a52-eb04-4a88-b46b-b8d238b8b131-dragonliftoff_2.jpg">
									<div class="card-overlay">
										<div class="card-footer">
											<h5 class="mb-0">Rocket Simulator Game</h5>
											<p class="white mb-0 mt-0"><small>January 3rd, 2018</small></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection