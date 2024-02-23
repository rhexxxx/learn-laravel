@extends('dashboard.layouts.main')

@section('container')
    <div   div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> My Post </h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif


    <div class="table-responsive small col-lg-8">
      <a href="/dashboard/posts/create" class="btn btn-primary">Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="fa-solid fa-eye" style="color: #000000;"></i></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="fa-regular fa-pen-to-square" style="color: #000000;"></i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf 
                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure ?')"><i class="fa-regular fa-circle-xmark" style="color: #000000;" ></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection