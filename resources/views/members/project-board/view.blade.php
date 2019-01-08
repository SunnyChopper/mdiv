@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3 class="text-center mb-0">Share. Collaborate. Win.</h3>
				<p class="text-center">Find co-founders. Team up with community members. Bring experienced members on team.</p>
				<div class="centered">
					<a href="/members/project-board/new" class="btn btn-success">Start New Project</a>
					<a href="/members/project-board/my" class="btn btn-warning">My Projects</a>
				</div>
				<hr />
			</div>
		</div>

		{{-- <div class="row project-board-search-box">
			<div class="col-lg-6 col-md-5 col-sm-6 col-xs-12">
				<input type="text" name="search_query" placeholder="i.e. Software projects" class="form-control" style="width: 70%; display: inline-block; float: left;">
				<input type="submit" value="Search" class="btn btn-primary" style="width: 25%; display: inline-block; float: right;">
			</div>

			<div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 mt-16-mobile">
				<select class="form-control sort_by_select">
					<option>Most Recent</option>
				</select>
				<label class="sort_by_label" style="">Sort by:</label>
			</div>
		</div> --}}

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="image-box">
					<div class="image-box-image set-bg" data-setbg="http://insidebusinessonline.com/wp-content/uploads/2018/07/rocket.jpg"></div>
					<div class="image-box-info">
						<h5 class="text-center mb-0">Bottled Rockets ECommerce Shop</h5>
						<p class="text-center"><small><b>Category: </b>E-commerce</small></p>
						<a href="/members/project-board/view/1" class="btn btn-primary centered">View Project</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="image-box">
					<div class="image-box-image set-bg" data-setbg="https://defendernetwork.com/wp-content/uploads/2017/06/page_5_social_media.jpg"></div>
					<div class="image-box-info">
						<h5 class="text-center mb-0">AI Powered Social Media Marketing</h5>
						<p class="text-center"><small><b>Category: </b>Digital Marketing</small></p>
						<a href="/members/project-board/view/1" class="btn btn-primary centered">View Project</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="image-box">
					<div class="image-box-image set-bg" data-setbg="https://martechtoday.com/wp-content/uploads/2018/08/crm-concept-table-charts-ss-1920_cjnnna.jpg"></div>
					<div class="image-box-info">
						<h5 class="text-center mb-0">CRM Software for Mobile Repair Businesses</h5>
						<p class="text-center"><small><b>Category: </b>Software</small></p>
						<a href="/members/project-board/view/1" class="btn btn-primary centered">View Project</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="image-box">
					<div class="image-box-image set-bg" data-setbg="https://bitcoinist.com/wp-content/uploads/2018/05/top-bitcoin-instagram-accounts-to-follow.jpg"></div>
					<div class="image-box-info">
						<h5 class="text-center mb-0">Instagram Influencer Network Website</h5>
						<p class="text-center"><small><b>Category: </b>Social Media</small></p>
						<a href="/members/project-board/view/1" class="btn btn-primary centered">View Project</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="image-box">
					<div class="image-box-image set-bg" data-setbg="https://www.vgr.com/wp-content/uploads/2018/10/fortnite-mythic-cloaked-star-ninja-x817.jpg"></div>
					<div class="image-box-info">
						<h5 class="text-center mb-0">Fortnite Mobile Community App</h5>
						<p class="text-center"><small><b>Category: </b>Software</small></p>
						<a href="/members/project-board/view/1" class="btn btn-primary centered">View Project</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="image-box">
					<div class="image-box-image set-bg" data-setbg="http://hiphopspeakeasy.com/wp-content/uploads/2016/11/soundcloud-logo-1.jpg"></div>
					<div class="image-box-info">
						<h5 class="text-center mb-0">SoundCloud Extension Plugin for Chrome</h5>
						<p class="text-center"><small><b>Category: </b>Software</small></p>
						<a href="/members/project-board/view/1" class="btn btn-primary centered">View Project</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection