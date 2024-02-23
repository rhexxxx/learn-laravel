
@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <article>
                        
                        <p>By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slog }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                        @if ($post->image)
                        <div style="max-height: 400px; overflow:hidden; ">
                            <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                        </div>
                        @else
                        <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
                        @endif
                        <article class="my-3 fs-5">
                            {!! $post->body !!}
                        </article>
                    
                </article>
                <a href="/blog" class="btn btn-primary my-5 px-3">Back</a>
            </div>
        </div>
    </div>
    
@endsection
