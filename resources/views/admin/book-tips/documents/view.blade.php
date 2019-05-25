@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			@if(count($documents) > 0)
			<div class="col-xs-12">
				<div style="overflow: auto;">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th>Downloads</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($documents as $document)
							<tr>
								<td style="vertical-align: middle;"><a href="{{ $download->url }}">{{ $document->title }}</a></td>
								<td style="vertical-align: middle;">{{ $document->description }}</td>
								<td style="vertical-align: middle;">{{ $document->downloads }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('/admin/book-tips' . $book->id . '/documents/edit/' . $document->id) }}" class="btn btn-primary">Edit Document</a>
									<button id="{{ $book->id }}" class="btn btn-danger">Delete Document</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			@else
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
				<div class="gray-box">
					<h3 class="text-center">No Documents</h3>
					<p class="text-center">You are currently not sharing any documents. Click below to share your first document.</p>
					<a href="{{ url('/admin/book-tips/' . $book->id . '/documents/new') }}" class="btn btn-primary centered">Create New Document</a>
				</div>
			</div>
			@endif
		</div>
	</div>
@endsection