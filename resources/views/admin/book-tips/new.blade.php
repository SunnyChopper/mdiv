@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="gray-box">
					<form id="create_book_form" action="/admin/book-tips/create" method="POST">
						{{ crsf_field() }}

						<div class="form-group">
							<label>Title:</label>
							<input type="text" class="form-control" name="title" required>
						</div>

						<div class="form-group">
							<label>Description:</label>
							<textarea class="form-control" rows="5" name="description" form="create_book_form"></textarea>
						</div>

						<div class="form-group row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<label>Start Date:</label>
								<input type="date" name="start_date" class="form-control" required>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<label>End Date:</label>
								<input type="date" name="end_date" class="form-control" required>
							</div>
						</div>

						<div class="form-group">
							<input type="text" name="image_url" class="form-control" required>
						</div>

						<div class="form-group">
							<input type="submit" value="Create Book" class="btn btn-success centered">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection