@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			@if(count($questions) > 0)
			<div class="col-12">
				<div style="overflow: auto;">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($questions as $question)
							<tbody>
								<tr>
									<td style="vertical-align: middle;">{{ $question->title }}</td>
									<td style="vertical-align: middle;">{{ $question->description }}</td>
									<td style="vertical-align: middle;">
										<a href="{{ url('/admin/book-tips/' . $book->id . '/questions/' . $question->id . '/answer') }}" class="btn btn-primary">Answer Question</a>
									</td>
								</tr>
							</tbody>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			@else
			<div class="col-lg-8 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-12 col-xs-12">
				<div class="gray-box">
					<h3 class="text-center">No Open Questions</h3>
					<p class="text-center mb-0">There are currently no open questions for this book.</p>
				</div>
			</div>
			@endif
		</div>
	</div>
@endsection