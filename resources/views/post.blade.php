@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <h1>{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value = "{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value = "{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if($post->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}" class="card-img-top" alt="{{ $post[0]->category->name }}" class="card-img-top">
            <div class="card-body text-center">
            <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark"><h2 class="card-title">{{ $post[0]->title }}</h2></a>
            <p>
                <small class="text-muted">
                   By <a href="/blog?author={{ $post[0]->author->username }}" class="text-decoration-none text-dark">{{ $post[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $post[0]->category->slog }}">{{ $post[0]->category->name }} </a> {{ $post[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $post[0]->excerpt }}</p>
            <a href="/post/{{ $post[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach($post->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="/blog?category={{ $post->category->slog }}" class="text-decoration-none text-white">
                        <div class="position-absolute bg-primary py-2 px-3 ">
                            {{ $post->category->name }}
                        </div>
                    </a>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class="text-muted">
                           By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/post/{{ $post->slug }}" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@else
<p class="text-center fs-4">No Post found.</p>
@endif

{{-- {{ $post->links() }} --}}
@endsection