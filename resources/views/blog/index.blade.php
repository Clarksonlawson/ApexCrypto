@extends('layouts.app')

@section('title', 'Blog List')

@section('content')
<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Blog List</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><p class="fs-18">/</p></li>
          <li><p class="fs-18">Blog</p></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

<section class="blog-list">
  <div class="container">
    <div class="row">
      <!-- Swiper Slider -->
      <div class="col-md-12">
        <div class="blog-slider">
          <div class="swiper blog-swiper">
            <div class="swiper-wrapper">
              @foreach($featuredBlogs as $blog)
              <div class="swiper-slide">
                <div class="blog-box">
                  <div class="box-image">
                    <img src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->title }}" />
                  </div>
                  <div class="box-content">
                    <a href="#" class="category btn-action">{{ strtoupper($blog->category ?? 'GENERAL') }}</a>
                    <a href="{{ route('blog.show', $blog->slug) }}" class="title">{{ $blog->title }}</a>
                    <div class="meta">
                      <a href="#" class="name"><span></span>{{ $blog->author ?? 'Anonymous' }}</a>
                      <a href="#" class="time">{{ $blog->created_at->format('M d, Y') }}</a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

      <!-- Blog Main Section -->
      <div class="col-xl-8 col-md-12">
        <div class="blog-main">
          @foreach($blogs as $blog)
          <div class="blog-box">
            <div class="box-image">
              <img src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->title }}" />
            </div>
            <div class="box-content">
              <a href="#" class="category btn-action">{{ strtoupper($blog->category ?? 'GENERAL') }}</a>
              <a href="{{ route('blog.show', $blog->slug) }}" class="title">{{ $blog->title }}</a>
              <div class="meta">
                <a href="#" class="name"><span></span>{{ $blog->author ?? 'Anonymous' }}</a>
                <a href="#" class="time">{{ $blog->created_at->format('M d, Y') }}</a>
              </div>
              <p class="text">{{ Str::limit(strip_tags($blog->excerpt), 150) }}</p>
              <a href="{{ route('blog.show', $blog->slug) }}">Read More</a>
            </div>
          </div>
          @endforeach

          <!-- Pagination -->
          <div class="pagination-wrap">
            {{ $blogs->links('pagination::bootstrap-5') }}
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-xl-4 col-md-12">
        <div class="sidebar">
          <form class="form-search" method="GET" action="{{ route('blog.index') }}">
            <div class="form-group">
              <input type="text" name="search" class="form-control" placeholder="Search Post" value="{{ request('search') }}" />
              <button type="submit" class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </form>

          {{-- <div class="widget category">
            <h6 class="heading">Category</h6>
            <ul>
              @foreach($categories as $category)
              <li><a href="{{ route('blog.index', ['category' => $category]) }}">{{ ucfirst($category) }}</a></li>
              @endforeach
            </ul>
          </div> --}}

          <div class="widget recent">
            <h6 class="heading">Recent Posts</h6>
            <ul>
              @foreach($recentBlogs as $recent)
              <li>
                <div class="image">
                  <img src="{{ asset($recent->thumbnail) }}" alt="{{ $recent->title }}" />
                </div>
                <div class="content">
                  <a href="#" class="category">{{ strtoupper($recent->category ?? 'GENERAL') }}</a>
                  <a href="{{ route('blog.show', $recent->slug) }}" class="title">{{ Str::limit($recent->title, 60) }}</a>
                </div>
              </li>
              @endforeach
            </ul>
          </div>

          {{-- <div class="widget tags">
            <h6 class="heading">Popular Tags</h6>
            <ul>
              @foreach($tags as $tag)
              <li><a href="{{ route('blog.index', ['tag' => $tag]) }}">{{ $tag }}</a></li>
              @endforeach
            </ul>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="section-sale">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="block-text">
              <h4 class="heading">Earn up to $25 worth of crypto</h4>
              <p class="desc">
                Earn up to $25 in crypto when you completer your first loan request.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="button">
              @if (Auth::check()){
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
              }
                @else
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                @endif
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
