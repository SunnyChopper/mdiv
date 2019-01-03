@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container mt-64 mb-64 mb-32-mobile mb-32-mobile">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
				<div class="gray-box">
					<h3 class="text-center">Successfully Subscribed!</h3>
					<hr />
					<p class="text-center">We've got you subscribed. In the meantime, check out our blog for more helpful content.</p>
					<a href="/blog" class="centered center-button btn btn-primary">View Blog</a>
				</div>
			</div>
		</div>
	</div>
@endsection