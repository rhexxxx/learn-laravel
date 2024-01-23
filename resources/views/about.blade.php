@extends('layouts.main')
@section("container")
<div class="about-page">
    <h1>Halaman About</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}">
    <h2>{{ $name }} boss</h2>
    <h3>{{ $email }}</h3>
</div>
    
@endsection
