
@extends('layouts.main')
@section('container')
<div class="container">
    @foreach ($post as $post)
    <article class="mt-5">
        <h2>
            <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5>
            By: {{ $post->author }}
        </h5>
        <p>
            {{ $post->excerpt }}
        </p>
    </article>
        
    @endforeach
</div>
@endsection