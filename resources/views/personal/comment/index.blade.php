@extends('layouts.main')
@section('content')
<main class="blog">
	<div class="container">
		<h1 class="edica-page-title" data-aos="fade-up">My comments</h1>
		<div class="row" data-aos="fade-up">
			<div class="col-12">
				<div class="card">
					<div class="card-body table-responsive p-0">
						<table class="table table-hover text-nowrap">
							<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Actions</th>
							</tr>
							</thead>
							<tbody>
							@foreach($comments as $comment)
							<tr>
								<td>{{ $comment->id }}</td>
								<td>{{ $comment->message }}</td>
								<td class="d-flex">
								<a href="{{ route('personal.comment.edit', $comment->id) }}" title="Edit" class="ml-3"><i class="fas fa-pencil-alt"></i></a>
								<form action="{{ route('personal.comment.delete', $comment->id) }}" method="POST" class="ml-3">
									@csrf
									@method('DELETE')
									<button type="submit" class="border-0 bg-transparent">
									<i class="fas fa-trash text-danger" title="Delete" role="button"></i>
									</button>
								</form>
								</td>
							</tr>
							@endforeach  
							</tbody>
						</table>
					</div>
				</div>
         	</div>
    	</div>
	</div>
</main>
@endsection