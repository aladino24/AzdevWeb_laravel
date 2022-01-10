@extends('posts.main_posts')

@section('content')
<h1 class="mb-4 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-2">
    <div class="col-md-6">
        <form action="/posts">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search topics or keywords..." name="search" value="{{ request('search') }}">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
    </div>
</div>

    @if ($posts->count())
        <div class="card mb-4 border border-primary">
            @if($posts[0]->image)
              <img  class="image-post" src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
            @else
            <img src="https://source.unsplash.com/1600x600?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body">
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"><h3 class="card-title">{{ $posts[0]->title }}</h3></a>
            <h6><i>ditulis oleh <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> Kategori <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></i></h6>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->updated_at->diffForHumans() }}</small></p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>



    <div class="container mt-5">
        <div class="row">

            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">

                    <!-- Label Category -->
                    <div class="label-category rounded">
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                    </div>

                    <!-- Gambar Post -->

                    @if($post->image)
                      <img width="500" height="200" src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @else
                      <img width="500" height="200" src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif

                    <div class="card-body">
                      <h5 class="card-title"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>

                      <!-- Property Post -->
                      <small class="text-muted">
                      <h6>
                          <i>by
                              <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}
                            </a>
                            {{ $post->created_at->diffForHumans() }}
                           </i>
                        </h6>
                    </small>


                      <p class="card-text">{!! $post->excerpt !!}</p>
                      <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else

    <p class="text-center fs-4">Tidak Ada Postingan</p>

  @endif
  <div class="d-flex justify-content-center">
  {{ $posts->links() }}
</div>
@endsection
