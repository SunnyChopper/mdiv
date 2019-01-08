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
			@foreach($posts as $post)
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="image-box">
						<div class="image-box-image set-bg" data-setbg="{{ $post->featured_image_url }}"></div>
						<div class="image-box-info">
							<h5 class="text-center mb-0">{{ $post->title }}</h5>
							<p class="text-center"><small><b>Category: </b>{{ $post->category }}</small></p>
							<a href="/members/project-board/view/{{ $post->id }}" class="btn btn-primary centered">View Project</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				{{ $posts->links() }}
			</div>
		</div>
	</div>
@endsection