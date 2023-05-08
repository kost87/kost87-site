@extends('layouts.main')

@section('content')
<main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Written {{ $date->format('F d Y h:i') }} • Featured • {{ $post->comments->count() }} Comments</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $post->main_image) }}" alt="featured image" class="w-50">
            </section>
            <section class="post-content" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        {!! $post->content !!}    
                    </div>
                </div>
                <form action="{{ route('post.like.store', $post->id) }}" method="post">
                    @csrf
                    @auth()
                    <button type="submit" class="border-0 bg-transparent">
                        @if(auth()->user()->likedPosts->contains($post->id))
                            <i class="fas fa-heart"></i>
                        @else
                            <i class="far fa-heart"></i>
                        @endif
                    </button>
                    @endauth
                    @guest()
                    <i class="fas fa-heart"></i>
                    @endguest
                    {{ $post->liked_users_count }}
                </form>
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('post.byTag', $tag->id) }}"> #{{ $tag->title }}  </a>
                        @endforeach 
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    @if($realatedPosts->count() > 0)
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                        <div class="row">
                            @foreach($realatedPosts as $realatedPost)
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ asset('storage/' . $realatedPost->main_image) }}" alt="related post" class="post-thumbnail">
                                    <p class="post-category">{{ $realatedPost->category->title }}</p>
                                    <a href="{{ route('post.show', $realatedPost->id) }}" style="text-decoration: none">
                                        <h5 class="post-title">{{ $realatedPost->title }}</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    @endif
                    @if($post->comments->count() > 0)
                    <section class="comment-list">
                        <h2 class="section-title mb-5" data-aos="fade-up">Comments</h2>
                        @foreach($post->comments as $comment)
                        <div class="comment-text" data-aos="fade-up">
                            <hr>
                            <div class="username">
                                {{ $comment->user->name }}
                                <span class="text-muted float-right">{{ $comment->dateAsCarbon->diffForHumans() }}</span>
                            </div>
                            {{ $comment->message }}
                        </div>
                        @endforeach
                    </section>
                    @endif
                    @auth()
                    <section class="comment-section" data-aos="fade-up">
                        <h2 class="section-title mb-5 mt-5">Leave a Comment</h2>
                        <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                <label for="comment" class="sr-only">Comment</label>
                                <textarea name="message" id="message" class="form-control" placeholder="Comment" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" value="Send Message" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
