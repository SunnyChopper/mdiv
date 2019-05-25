@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div class="container pt-64 pb-64">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h3>Title: {{ $question->title }}</h3>
				<p>Description: {{ $question->description }}</p>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-32-mobile">
				<div class="gray-box">
					<form id="answer_question_form" action="/admin/book-tips/questions/answer" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="question_id" value="{{ $question->id }}">

						<div class="form-group">
							<h5>Your Answer:</h5>
							<textarea class="form-control" name="answer" form="answer_question_form" rows="6" required></textarea>
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Answer Question">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection