@extends('layouts.app')
@section('title', $blog->title)

@section('content')
<div class="container py-5">
  <div class="blog-detail">
    <h1 class="mb-3">{{ $blog->title }}</h1>
    <p class="text-muted">
      By {{ $blog->author ?? 'Anonymous' }} • {{ $blog->created_at->format('M d, Y') }}
    </p>

    <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}" class="img-fluid rounded my-4">

    <div class="blog-body">
      {!! nl2br(e($blog->content)) !!}
    </div>

    <a href="{{ route('blog.index') }}" class="btn btn-outline-primary mt-4">
      ← Back to Blogs
    </a>
  </div>
</div>
@endsection
