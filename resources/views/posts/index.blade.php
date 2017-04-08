@extends('template')

@section('title')
    Blog - Posts
@endsection

@section('content')
    @foreach ($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post }}</h2>
        </div>
    @endforeach
@endsection