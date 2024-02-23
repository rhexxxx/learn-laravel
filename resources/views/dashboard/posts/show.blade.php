@extends('dashboard.layouts.main')

@section('container')
    <div class="container my-3">
        <div class="row ">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                made in <a href="/blog?category={{ $post->category->slog }}" class="text-decoration-none">{{ $post->category->name }}</a>
                <article>
                        <a href="/dashboard/posts" class="btn btn-primary my-4" ><i class="fa-solid fa-arrow-left" style="color: #fff;"></i> Back to my Post</a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-4" ><i class="fa-regular fa-pen-to-square" style="color: #000000;"></i> edit</a>

                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf 
                            <button class="btn btn-danger my-4" onclick="return confirm('Are You Sure ?')"><i class="fa-regular fa-circle-xmark" style="color: #fff;"></i> Delete</button>
                        </form>

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
            </div>
        </div>
    </div>
@endsection