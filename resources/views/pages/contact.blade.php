@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mb-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="gray-box">
					<form action="/contact/submit" method="POST" id="contact_form">
						{{ csrf_field() }}
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" required>
						</div>

						<div class="form-group mt-32">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>

						<div class="form-group mt-32">
							<select name="category" class="form-control" form="contact_form">
								<option value="General Inquiry">General Inquiry</option>
								<option value="Guest Writing">Guest Writing</option>
								<option value="Billing">Billing</option>
							</select>
						</div>

						<div class="form-group mt-32">
							<textarea form="contact_form" class="form-control" placeholder="Message" name="message" rows="5"></textarea>
						</div>

						<div class="form-group mt-32">
							<input type="submit" class="btn btn-primary" value="Submit">
						</div>

						@if(session()->has('success'))
							<div class="form-group">
								<p class="green">{{ session()->get('success') }}
							</div>
						@endif
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-32-mobile">
				<h3>Connect</h3>
				<hr />
				<p><a href="https://www.instagram.com/millionairedivision"><i class="fab fa-instagram"></i> Instagram</a></p>
				<p><a href="https://www.twitter.com/newagestartup"><i class="fab fa-twitter"></i> Twitter</a></p>
			</div>
		</div>
	</div>
@endsection