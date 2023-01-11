@extends('layouts/main')

@section('container')

<!-- Uncomment this for rofi --> 
{{-- @include('partials.competition_slider') --}}

<!-- Uncomment this for rozi -->
{{-- @include('partials.event_slider') --}}

<!-- Put The Slider Here -->


<!-- Use the code below to create a loop to every posts  -->
  @if ($posts->count())
    @if(isset($_GET["category"]))
      @if($_GET["category"] === "competition")
        <div class="container">
          <div class="row">
            @foreach ($posts as $post)
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                  <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                      <small class="text-muted">
                        By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                      </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @elseif($_GET["category"] === "event")
      <div class="container">
          <div class="row">
            @foreach ($posts as $post)
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                  <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                      <small class="text-muted">
                        By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                      </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @else
      <div class="container">
          <div class="row">
            @foreach ($posts as $post)
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                  <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                      <small class="text-muted">
                        By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                      </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endif
    @endif

  @else
    <p class="text-center fs-4">No post found.</p>
  @endif

  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>

@endsection
