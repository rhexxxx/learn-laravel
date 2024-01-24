@extends('layouts.main')
@section('container')
<div class="container">
    <h1 class="mb-5">post Category :{{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mt-5">
        <h2>
            <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>
            {{ $post->excerpt }}
        </p>
    </article>
        
    @endforeach
</div>
@endsection