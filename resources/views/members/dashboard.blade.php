@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h3>Latest Content</h3>
				<p>Stay up-to-date with tactics, guides, and advice on starting your online business. Updated weekly.</p>

				<div class="row">
					@foreach($posts as $post)
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
							<a href="/post/{{ $post->id }}/{{ $post->slug }}">
								<div class="background-card set-bg" data-setbg="{{ $post->featured_image_url }}">
									<div class="card-overlay">
										<div class="card-footer">
											<h5 class="mb-0" style="font-weight: bolder; text-shadow: 0px 2px 4px rgba(0,0,0,0.5);">{{ $post->title }}</h5>
											<p class="mb-0" style="text-shadow: 0px 2px 4px rgba(0,0,0,0.5);"><small>January 4th, 2019</small></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					@endforeach

					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<a href="/blog" class="btn btn-primary centered mt-16">View All Content</a>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-32-mobile">
				<div class="gray-box">
					<h3 class="text-center mb-0">ProjectBoard</h3>
					<p class="text-center">Latest projects</p>
					<hr />

					@foreach($boards as $board)
						<div class="row center-content-desktop mt-32">
							<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
								<a href="/members/project-board/view/{{ $board->id }}">
									<img src="{{ $board->featured_image_url }}" class="regular-image light-shadow">
								</a>
							</div>
							<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 mt-16-mobile" style="margin: auto;">
								<a href="/members/project-board/view/{{ $board->id }}"><h6 class="mb-0 mt-16-mobile">{{ $board->title }}</h6></a>
								<p class="mb-0"><small>{{ $board->created_at->format('M jS, Y') }}</small></p>
								<small><a href="/members/project-board/view/{{ $board->id }}">View Project</a></small>
							</div>
						</div>
					@endforeach

					<a href="/members/project-board/view" class="btn btn-primary centered mt-32">View All Boards</a>
				</div>
			</div>
		</div>
	</div>
@endsection