@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64">
		<div class="row mb-32">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<img src="{{ $post->featured_image_url }}" class="regular-image">
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="gray-box mb-32">
					<form action="/newsletter/general/signup" method="post">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h5 class="text-center">Join Others in Getting Exclusive Guides, Advice, and Tips</h5>
								<p class="text-center mb-0">Interested in growing your online business? Join others who have made the commitment in getting the latest how-to's, guides, and advice on becoming a better online entrepreneur.</p> 
								<hr />
							</div>

							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-16 mb-0-desktop">
								<input type="text" name="first_name" placeholder="First Name" class="form-control" required>
							</div>

							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-16 mb-0-desktop">
								<input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
							</div>

							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-16 mb-0-desktop">
								<input type="email" name="email" placeholder="Email" class="form-control" required>
							</div>

							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<input type="submit" value="Get Access" class="centered btn btn-primary" required>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div id="post-body">
					{!! $post->body !!}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="gray-box mt-16 mb-32">
					<form action="/newsletter/general/signup" method="post">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h5 class="text-center">Join Others in Getting Exclusive Guides, Advice, and Tips</h5>
								<p class="text-center mb-0">Interested in growing your online business? Join others who have made the commitment in getting the latest how-to's, guides, and advice on becoming a better online entrepreneur.</p> 
								<hr />
							</div>

							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-16 mb-0-desktop">
								<input type="text" name="first_name" placeholder="First Name" class="form-control" required>
							</div>

							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-16 mb-0-desktop">
								<input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
							</div>

							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-16 mb-0-desktop">
								<input type="email" name="email" placeholder="Email" class="form-control" required>
							</div>

							<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
								<input type="submit" value="Get Access" class="centered btn btn-primary" required>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<hr />
				<?php $user = App\User::find($post->author_id); ?>
				@if(isset($user->first_name))
					<p><small>Written by {{ $user->first_name }} on {{ $post->created_at->format('M d Y') }}</small></p>
				@else
					<p><small>Written by {{ $uesr->name }} on {{ $post->created_at->format('M d Y') }}</small></p>
				@endif
			</div>
		</div>
	</div>
@endsection