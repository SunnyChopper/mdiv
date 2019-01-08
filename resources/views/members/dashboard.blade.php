@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h3>Content for You</h3>
				<p>Our ContentBrain algorithm is constantly learning what you might find the most helpful. The more you interact with content, the smarter it gets.</p>

				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<a href="">
							<div class="background-card set-bg" data-setbg="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151207144234/151204-DailyVee_Episode_001_02_1920x1080.jpg">
								<div class="card-overlay">
									<div class="card-footer">
										<h5 class="mb-0">12 Online Business Tips to Takeaway from GaryVee</h5>
										<p class="mb-0"><small>January 4th, 2019</small></p>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<a href="">
							<div class="background-card set-bg" data-setbg="http://cancel.tv/wp-content/uploads/2017/12/YouTube-TV.jpg">
								<div class="card-overlay">
									<div class="card-footer">
										<h5 class="mb-0">What to Do About YouTube's New Algorithm Update</h5>
										<p class="mb-0"><small>January 4th, 2019</small></p>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<a href="/blog" class="btn btn-primary centered">View All Content</a>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-32-mobile">
				<div class="gray-box">
					<h3 class="text-center mb-0">ProjectBoard</h3>
					<p class="text-center">Latest projects</p>
					<hr />

					<div class="row center-content-desktop mt-32">
						<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
							<img src="https://cdn.aarp.net/content/dam/aarp/money/budgeting_savings/2016/04/1140-yeager-sell-your-used-books.imgcache.rev6feda141288df73e8fd100822bb375ea.jpg" class="regular-image light-shadow">
						</div>
						<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-16-mobile" style="margin: auto;">
							<h6 class="mb-0 mt-16-mobile">Book Delivery Service</h6>
							<p class="mb-0"><small>January 4th, 2019</small></p>
							<small><a href="">View Project</a></small>
						</div>
					</div>

					<div class="row center-content-desktop mt-32">
						<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
							<img src="https://i.ytimg.com/vi/KlULoQj3nao/maxresdefault.jpg" class="regular-image light-shadow">
						</div>
						<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-16-mobile" style="margin: auto;">
							<h6 class="mb-0 mt-16-mobile">Death Note Remake</h6>
							<p class="mb-0"><small>January 4th, 2019</small></p>
							<small><a href="">View Project</a></small>
						</div>
					</div>

					<div class="row center-content-desktop mt-32">
						<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
							<img src="https://cdn.vox-cdn.com/thumbor/DgLP_M2I6SEc0t9Udpj66hkYEBY=/0x0:2040x1360/1200x800/filters:focal(854x1034:1180x1360)/cdn.vox-cdn.com/uploads/chorus_image/image/61385371/npatel_180912_2947_0016_clean.0.jpg" class="regular-image light-shadow">
						</div>
						<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-16-mobile" style="margin: auto;">
							<h6 class="mb-0 mt-16-mobile">Mobile Exchange Service</h6>
							<p class="mb-0"><small>January 4th, 2019</small></p>
							<small><a href="">View Project</a></small>
						</div>
					</div>

					<div class="row center-content-desktop mt-32">
						<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
							<img src="https://dqbasmyouzti2.cloudfront.net/assets/content/cache/made/content/images/articles/Electric_Car_Concept_XL_721_420_80_s_c1.jpg" class="regular-image light-shadow">
						</div>
						<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-16-mobile" style="margin: auto;">
							<h6 class="mb-0 mt-16-mobile">Tesla Community App</h6>
							<p class="mb-0"><small>January 4th, 2019</small></p>
							<small><a href="">View Project</a></small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection