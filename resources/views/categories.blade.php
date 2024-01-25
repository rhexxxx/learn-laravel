@extends('layouts.main')
@section('container')
<div class="container">
    <h1 class="mb-5">post Categories</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <a class="text-decoration-none" href="/categories/{{ $category->slog }}">{{ $category->name }}</a>      
            </li>
        </ul>
    @endforeach
</div>
@endsection