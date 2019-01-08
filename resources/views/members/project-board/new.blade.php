@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mt-32-desktop">
		<form action="/members/project-board/create" method="post" id="create_board_form" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<label>Featured Image of Project:</label>
					<img src="https://dairydoo.com/wp-content/uploads/2018/03/Placeholder.png" class="regular-image" id="upload_image">
					<input type="file" name="upload_image" class="upload_file" id="upload_file" accept="image/png, image/jpeg, image/jpg, image/gif">
					<label for="upload_file" class="centered"><i class="fas fa-upload" style="margin-right: 0.5em;"></i> Upload Image</label>
				</div>

				<div class="col-lg-8 col-md-6 col-sm-12 col-12 mt-32-mobile">
					<div class="form-group">
						<label>Title of Project:</label>
						<input type="text" name="title" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Description of Project:</label>
						<textarea class="form-control" rows="6" name="description" form="create_board_form" required></textarea>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-8 col-12 form-group">
							<label>Category of Project:</label>
							<select name="category" form="create_board_form" class="form-control">
								<option value="Art">Art</option>
								<option value="Beauty">Beauty</option>
								<option value="B2B Business">B2B Business</option>
								<option value="Cars">Cars</option>
								<option value="Education">Education</option>
								<option value="Engineering">Engineering</option>
								<option value="Entertainment">Entertainment</option>
								<option value="Fashion">Fashion</option>
								<option value="Fitness">Fitness</option>
								<option value="Food & Drinks">Food & Drinks</option>
								<option value="Gaming">Gaming</option>
								<option value="Health">Health</option>
								<option value="Homes">Homes</option>
								<option value="Investing">Investing</option>
								<option value="Makeup">Makeup</option>
								<option value="Marketing">Marketing</option>
								<option value="Media">Media</option>
								<option value="Music">Music</option>
								<option value="News">News</option>
								<option value="Real Estate">Real Estate</option>
								<option value="Software">Software</option>
								<option value="Sports">Sports</option>
								<option value="Technology">Technology</option>
								<option value="Trading">Trading</option>
								<option value="Travel">Travel</option>
								<option value="Trucks">Trucks</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<input type="submit" value="Create Board" class="btn btn-success">
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