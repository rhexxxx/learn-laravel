@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <h1>{{ $title }}</h1>

    @if($post->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}" class="card-img-top" alt="{{ $post[0]->category->name }}" class="card-img-top">
            <div class="card-body text-center">
            <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark"><h2 class="card-title">{{ $post[0]->title }}</h2></a>
            <p>
                <small class="text-muted">
                   By <a href="/author/{{ $post[0]->author->username }}" class="text-decoration-none text-dark">{{ $post[0]->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post[0]->category->slog }}">{{ $post[0]->category->name }} </a> {{ $post[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $post[0]->excerpt }}</p>
            <a href="/post/{{ $post[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach($post->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="/categories/{{ $post->category->slog }}" class="text-decoration-none text-white">
                        <div class="position-absolute bg-primary py-2 px-3 ">
                            {{ $post->category->name }}
                        </div>
                    </a>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class="text-muted">
                           By <a href="/author/{{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection