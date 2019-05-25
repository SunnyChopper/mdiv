@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			@if(count($books) > 0)
				<div class="col-xs-12">
					<div style="overflow: auto;">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Book Image</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($books as $book)
									<tr>
										<td style="vertical-align: middle;"><a href="{{ url('/members/book-tips/dashboard/' . $book->id ) }}">{{ $book->title }}</a></td>
										<td style="vertical-align: middle;">{{ $book->description }}</td>
										<td style="vertical-align: middle;">{{ Carbon\Carbon::parse($book->start_date)->format('M jS, Y') }}</td>
										<td style="vertical-align: middle;">{{ Carbon\Carbon::parse($book->end_date)->format('M jS, Y') }}</td>
										<td style="vertical-align: middle;"><img src="{{ $book->image_url }}" class="regular-image-100"></td>
										<td style="vertical-align: middle;">
											<a href="{{ url('/admin/book-tips/edit' . $book->id) }}" class="btn btn-primary">Edit Book</a>
											<button id="{{ $book->id }}" class="btn btn-danger" style="float: right;">Delete Book</button>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@else
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="gray-box">
						<h3 class="text-center">No Books</h3>
						<p class="text-center">There are no books in the system. Click below to create the first one.</p>
						<a href="{{ url('/admin/book-tips/new') }}" class="btn btn-primary centered">Create Book</a>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection