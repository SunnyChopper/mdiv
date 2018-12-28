@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mt-32-mobile mb-32-mobile">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-lg-offset-3 col-md-8 col-sm-12 col-12">
				<div class="gray-box">
					<form action="/admin/login" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" name="username" required>
						</div>

						<div class="form-group">
							<label>Password:</label>
							<input type="password" class="form-control" name="password" required>
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-primary center-button">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection