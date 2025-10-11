@extends('layouts.app')

@section('title', $blog->title)

@section('content')

<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">{{ $blog->title }}</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><p class="fs-18">/</p></li>
          <li><p class="fs-18">Blog Details</p></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

<section class="blog-details">
  <div class="container">
    <div class="row">
      <!-- Main Blog Content -->
      <div class="col-xl-8 col-md-12">
        <div class="blog-main">
          <h3 class="title">{{ $blog->title }}</h3>

          <div class="meta">
            <a href="#" class="category btn-action">{{ $blog->category }}</a>
            <div class="meta-info">
              <a href="#" class="name"><span></span>{{ $blog->author ?? 'Anonymous' }}</a>
              <a href="#" class="time">{{ $blog->created_at->format('M d, Y') }}</a>
            </div>
          </div>

          <!-- Blog Content -->
          <div class="content">
            @if($blog->thumbnail)
            <div class="box-image mb-4">
              <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}" class="img-fluid" />
            </div>
            @endif

            {!! $blog->content !!}
          </div>

          <!-- Tags and Share Section -->
          <div class="details-bottom">
            <div class="tags">
              <h6>Tags:</h6>
              <ul>
                @foreach(explode(',', $blog->tags ?? '') as $tag)
                <li><a href="#">{{ trim($tag) }}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="share">
              <h6>Share:</h6>
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>

          <!-- Comment Form (optional static for now) -->
          <form action="#" method="post">
            <h6 class="heading">Leave a comment</h6>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Name" />
              <input class="form-control" type="text" placeholder="Email" />
            </div>
            <div class="form-group">
              <textarea
                class="form-control"
                cols="30"
                rows="10"
                placeholder="Message"
              ></textarea>
            </div>
            <button class="btn-action" type="submit">Send comment</button>
          </form>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-xl-4 col-md-12">
        <div class="sidebar">
          <div class="widget recent mt-0">
            <h6 class="heading">Recent Posts</h6>
            <ul>
              @foreach($recentBlogs as $recent)
              <li>
                <div class="image">
                  <img src="{{ asset($recent->thumbnail) }}" alt="{{ $recent->title }}" />
                </div>
                <div class="content">
                  <a href="#" class="category">{{ strtoupper($recent->category) }}</a>
                  <a href="{{ route('blog.show', $recent->slug) }}" class="title">
                    {{ Str::limit($recent->title, 50) }}
                  </a>
                </div>
              </li>
              @endforeach
            </ul>
          </div>

          <div class="widget tags">
            <h6 class="heading">Popular Tags</h6>
            <ul>
              @php
                $allTags = collect($recentBlogs)
                  ->pluck('tags')
                  ->filter()
                  ->flatMap(fn($t) => explode(',', $t))
                  ->unique()
                  ->take(10);
              @endphp
              @foreach($allTags as $tag)
              <li><a href="#">{{ trim($tag) }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
