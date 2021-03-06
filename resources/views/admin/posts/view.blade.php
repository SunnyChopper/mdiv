@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	@include('admin.posts.modals.delete')

	<div class="container mt-64 mb-64">
		<div class="row">
			@if(count($posts) > 0)
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				
				<div style="overflow: auto;">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Title</th>
								<th>Slug</th>
								<th>Featured Image</th>
								<th>Last Updated</th>
								<th>Status</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($posts as $post)
								<tr>
									<td style="vertical-align: middle;">{{ $post->title }}</td>
									<td style="vertical-align: middle;">{{ $post->slug }}</td>
									<td style="max-width: 200px; vertical-align: middle;"><img src="{{ $post->featured_image_url }}" class="regular-image"></td>
									<td style="vertical-align: middle;">{{ $post->updated_at->format('M jS, Y') }}</td>
									<td style="vertical-align: middle;">
										@if($post->is_active == 1)
										Published
										@elseif($post->is_active == 2)
										In Draft
										@endif
									<td style="vertical-align: middle;">
										<a href="/admin/posts/edit/{{ $post->id }}" class="btn btn-info rounded small">Edit</a>
										<button id="{{ $post->id}}" class="btn delete_post_button btn-danger rounded small">Delete</button>
									</td>
								</tr>
							@endforeach	
						</tbody>
					</table>
				</div>

				<a href="/admin/posts/new" class="btn btn-primary centered mt-32">Create New Post</a>

			</div>
			@else
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="gray-box">
						<h3 class="text-center">No Blog Posts</h3>
						<p class="text-center">Click on the button below to get started on your first post.</p>
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-12">
								<a href="/admin/posts/new" class="btn btn-primary centered">New Blog Post</a>
							</div>
						</div>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection

@section('page_js')
	<script type="text/javascript">
		$(".delete_post_button").on('click', function() {
			// Get post ID
			var post_id = $(this).attr('id');

			// Set in modal
			$("#delete_blog_post_id").val(post_id);

			// Show modal
			$("#delete_blog_post_modal").modal();
		});
	</script>
@endsection