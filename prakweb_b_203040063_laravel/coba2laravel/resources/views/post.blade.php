@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title }}</h2>

  <p>By. <a href="posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
    {{ $post->category->name }}</a></p>

    @if($post->image)
            <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid ">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid ">
        @endif

  <!-- <h5>{{ $post["author"] }}</h5> -->
  {!! $post->body !!}

</article>
<a href="/blog" class="d-block mt-3">back to posts</a>
@endsection
