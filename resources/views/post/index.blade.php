@extends('layouts.main')

@section('content')
<main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <div class="row">
                <div class="col-md-8">
                    <section class="featured-posts-section">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
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
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Popular posts</h5>
                        @foreach($likedPosts as $post)
                            <ul class="post-list">
                                <li class="post">
                                    <a href="{{ route('post.show', $post->id) }}" class="post-permalink media">
                                        <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{ $post->title }}</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Categories</h5>
                        @foreach($categories as $category)
                        <li><a href="{{ route('category.show', $category) }}">{{ $category->title }}</a></li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
