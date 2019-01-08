@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row center-content">
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12" style="margin: auto;">
				<img src="{{ $post->featured_image_url }}" class="regular-image light-shadow">
			</div>

			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12" style="margin: auto;">
				<h4 class="mb-2 mt-32">{{ $post->title }}</h4>
				{{-- <p><small>Created 48 minutes ago</small></p> --}}
				<hr />
				<p>{{ $post->description }}</p>
				<div class="profile-box mt-32">
					<?php $user = App\User::find($post->post_user_id); ?>
					<div class="row center-content">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-4" style="margin: auto;">
							<img src="{{ $user->profile_image_url }}" class="regular-image" style="border-radius: 100%">
						</div>
						<div class="col-lg-9 col-md-8 col-sm-8 col-xs-8" style="margin: auto;">
							<h6 class="mb-0">Contact Project Owner</h6>
							<p class="mb-16"><small>{{ $user->username }}</small></p>

							<a href="mailto:{{ $user->email }}" class="btn btn-primary mb-8-mobile">Email</a>

							@if($user->facebook_link != "")
								<a href="{{ $user->facebook_link }}" class="btn btn-primary mb-8-mobile">Facebook</a>
							@endif

							@if($user->twitter_link != "")
								<a href="{{ $user->twitter_link }}" class="btn btn-primary mb-8-mobile">Twitter</a>
							@endif

							@if($user->instagram_link != "")
								<a href="{{ $user->instagram_link }}" class="btn btn-primary mb-8-mobile">Instagram</a>
							@endif

							@if($user->youtube_link != "")
								<a href="{{ $user->youtube_link }}" class="btn btn-primary mb-8-mobile">YouTube</a>
							@endif
						</div>
					</div>
				</div>
				<p class="mt-16"><a href="/members/project-board/view" class="mt-16"><i class="fas fa-arrow-left"></i> Back to all</a></p>
			</div>
		</div>
	</div>
@endsection