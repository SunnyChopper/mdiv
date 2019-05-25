@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
				<div class="gray-box">
					<form id="create_document_form" action="/admin/book-tips/documents/create">
						{{ csrf_field() }}
						<input type="hidden" name="book_id" value="{{ $book->id }}">
						<input type="hidden" name="document_id" value="{{ $document->id }}">

						<div class="form-group">
							<label>Title:</label>
							<input type="text" value="{{ $document->title }}" name="title" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Description:</label>
							<textarea class="form-control" name="description" rows="5" form="create_document_form" required>{{ $document->description }}</textarea>
						</div>

						<div class="form-group">
							<label>Document URL:</label>
							<input type="url" name="url" value="{{ $document->url }}" class="form-control" required>
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-success centered" value="Create Document">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection