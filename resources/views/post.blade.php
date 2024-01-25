@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <h1>{{ $title }}</h1>
    @foreach ($post as $post)
    <article class="mt-5 pb-5 border-bottom">
        <h2><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slog }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>

        <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
    </article>
        
    @endforeach
</div>
@endsection