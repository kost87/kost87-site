@extends('layouts.main')

@section('content')
<main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">#{{ $tag->title }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <section class="featured-posts-section">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="blog-post-category">{{ $post->category->title }}</p>
                                    <span><i class="fas fa-heart"></i> {{ $post->liked_users_count }}</span>
                                </div>
                                <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{ $post->title }}</h6>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="mx-auto" style="margin-top: -100px;" data-aos="fade-up">
                            {{-- $posts->links() --}}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </main>
@endsection
