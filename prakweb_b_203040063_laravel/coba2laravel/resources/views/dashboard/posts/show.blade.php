@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3">{{ $posts->title }}</h1>

      <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
      <a href="/dashboard/posts/{{ $posts->slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <form action="/dashboard/posts/{{ $posts->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
      </form>

      @if($posts->image)
      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/' . $posts->image) }}" alt="{{ $posts->category->name }}" class="img-fluid mt-3">
      </div>
      @else

      <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid mt-3">
      @endif

      <article class="my-3 fs-5">
        {!! $posts->body !!}
      </article>


      
    </div>
  </div>
</div>
@endsection