@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	@include('members.project-board.modals.delete')

	<div class="container mt-64 mb-64 mt-32-mobile mt-32-desktop">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="text-center">Your projects.</h2>
				<p class="text-center mb-2">Edit your projects and share more ideas.</p>
				<hr />
			</div>
		</div>

		<div class="row">
			@if(count($posts) > 0)
				@foreach($posts as $post)
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						
						<div class="background-card set-bg light-shadow" data-setbg="{{ $post->featured_image_url }}">
							<div class="card-overlay">
								<div class="card-footer" style="width: 100%">
									<h5><a href="/members/project-board/view/{{ $post->id }}" class="white">{{ $post->title }}</a></h5>
									<a href="/members/project-board/edit/{{ $post->id }}" class="btn btn-primary">Edit</a>
									<button class="mb-0 btn btn-danger delete_project_board_button" id="{{ $post->id }}">Delete</button>
								</div>
							</div>
						</div>
						
					</div>
				@endforeach
			@else
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-12 col-sm-12 col-xs-12">
					<div class="gray-box">
						<p class="text-center">You have not uploaded any content yet.</p>
						<a href="/members/project-board/new" class="centered btn btn-primary">Upload Content</a>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection

@section('page_js')
	<script type="text/javascript">
		$(".delete_project_board_button").on('click', function(){
			// Get ID
			var board_id = this.id;

			// Set ID
			$("#delete_project_board_id").val(board_id);

			// Show modal
			$("#delete_project_board_modal").modal();
		});
	</script>
@endsection