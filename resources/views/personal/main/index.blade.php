@extends('layouts.main')
@section('content')
<main class="blog">
	<div class="container">
		<h1 class="edica-page-title" data-aos="fade-up">Personal</h1>
		<div class="row" data-aos="fade-up">
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">
						<i class="far fa-heart"></i> Liked posts</h5>
						<h6 class="card-subtitle mb-2 text-muted">View posts you have liked</h6>
						<a href="{{ route('personal.liked.index') }}" class="card-link">Show posts</a>
					</div>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">
						<i class="fas fa-comment"></i> Comments</h5>
						<h6 class="card-subtitle mb-2 text-muted">View your comments</h6>
						<a href="{{ route('personal.comment.index') }}" class="card-link">Show comments</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection