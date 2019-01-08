@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mt-32-desktop">
		<form action="/members/project-board/update" method="post" id="edit_board_form" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" value="{{ $post->id }}" name="post_id"> 
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<label>Featured Image of Project:</label>
					<img src="{{ $post->featured_image_url }}" class="regular-image" id="upload_image">
					<input type="file" name="upload_image" class="upload_file" id="upload_file" accept="image/png, image/jpeg, image/jpg, image/gif">
					<label for="upload_file" class="centered"><i class="fas fa-upload" style="margin-right: 0.5em;"></i> Upload Image</label>
				</div>

				<div class="col-lg-8 col-md-6 col-sm-12 col-12 mt-32-mobile">
					<div class="form-group">
						<label>Title of Project:</label>
						<input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Description of Project:</label>
						<textarea class="form-control" rows="6" name="description" form="edit_board_form" required>{{ $post->description }}</textarea>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-8 col-12 form-group">
							<label>Category of Project:</label>
							<select name="category" form="edit_board_form" class="form-control">
								<option value="Art" <?php if ($post->category == "Art") { echo "selected"; } ?>>Art</option>
								<option value="Beauty" <?php if ($post->category == "Beauty") { echo "selected"; } ?>>Beauty</option>
								<option value="B2B Business" <?php if ($post->category == "B2B Business") { echo "selected"; } ?>>B2B Business</option>
								<option value="Cars" <?php if ($post->category == "Cars") { echo "selected"; } ?>>Cars</option>
								<option value="Education" <?php if ($post->category == "Education") { echo "selected"; } ?>>Education</option>
								<option value="Engineering" <?php if ($post->category == "Engineering") { echo "selected"; } ?>>Engineering</option>
								<option value="Entertainment" <?php if ($post->category == "Entertainment") { echo "selected"; } ?>>Entertainment</option>
								<option value="Fashion" <?php if ($post->category == "Fashion") { echo "selected"; } ?>>Fashion</option>
								<option value="Fitness" <?php if ($post->category == "Fitness") { echo "selected"; } ?>>Fitness</option>
								<option value="Food" <?php if ($post->category == "Food & Drinks") { echo "selected"; } ?>>Food & Drinks</option>
								<option value="Gaming" <?php if ($post->category == "Gaming") { echo "selected"; } ?>>Gaming</option>
								<option value="Health" <?php if ($post->category == "Health") { echo "selected"; } ?>>Health</option>
								<option value="Homes" <?php if ($post->category == "Homes") { echo "selected"; } ?>>Homes</option>
								<option value="Investing" <?php if ($post->category == "Investing") { echo "selected"; } ?>>Investing</option>
								<option value="Makeup" <?php if ($post->category == "Makeup") { echo "selected"; } ?>>Makeup</option>
								<option value="Marketing" <?php if ($post->category == "Marketing") { echo "selected"; } ?>>Marketing</option>
								<option value="Media" <?php if ($post->category == "Media") { echo "selected"; } ?>>Media</option>
								<option value="Music" <?php if ($post->category == "Music") { echo "selected"; } ?>>Music</option>
								<option value="News" <?php if ($post->category == "News") { echo "selected"; } ?>>News</option>
								<option value="Real Estate" <?php if ($post->category == "Real Estate") { echo "selected"; } ?>>Real Estate</option>
								<option value="Software" <?php if ($post->category == "Software") { echo "selected"; } ?>>Software</option>
								<option value="Sports" <?php if ($post->category == "Sports") { echo "selected"; } ?>>Sports</option>
								<option value="Technology" <?php if ($post->category == "Technology") { echo "selected"; } ?>>Technology</option>
								<option value="Trading" <?php if ($post->category == "Trading") { echo "selected"; } ?>>Trading</option>
								<option value="Travel" <?php if ($post->category == "Travel") { echo "selected"; } ?>>Travel</option>
								<option value="Trucks" <?php if ($post->category == "Trucks") { echo "selected"; } ?>>Trucks</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<input type="submit" value="Update Board" class="btn btn-success">
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection

@section('page_js')
	<script type="text/javascript">
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$("#upload_image").attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("input[name=upload_image]").on('change', function() {
			readURL(this);
		});
	</script>
@endsection