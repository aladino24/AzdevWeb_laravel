@extends('posts.main_posts')

@section('content')
    <h3>{{ $title }}</h3>

    <div class="container">
        <div class="row">
            {{-- @dd($categories) --}}
            @foreach ($categories as $category)

            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white p-0 mb-5">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-4">
                      <h5 class="card-title text-center flex-fill fs-3">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


@endsection
