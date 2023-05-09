@extends('layouts.main')
@section('content')
<main class="blog">
	<div class="container">
		<h1 class="edica-page-title" data-aos="fade-up">Edit comment</h1>
		<div class="row" data-aos="fade-up">
			<div class="col-12">
				<div class="card card-primary">
					<form action="{{ route('personal.comment.update', $comment->id) }}" method="POST">
						@csrf
						@method('PATCH')
						<div class="card-body">
							<div class="form-group">
							<label for="message">Comment</label>
								<textarea class="form-control" name="message" id="message" placeholder="Enter message" cols="30" rows="10">{{ $comment->message }}</textarea>
							@error('message')
								<div class="text-danger">{{ $message }}</div>
							@enderror
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
              </div>
         	</div>
    	</div>
	</div>
</main>
@endsection