@extends('posts.main_posts')

@section('content')
<article class="mb-5">
    <h6><i>Dibuat {{ $post->created_at->format('d M Y') }}</i></h6>
    <h1 class="mb-3">{{ $post->title }}</h1>
    <h6><i>by <a href="/posts?user={{ $post->user->username  }}">{{ $post->user->name }}</a> Kategori <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></i></h6>
    <hr>
    <div class="container mb-5">
        @if($post->image)
            <img style="max-height:400px" class="image-post" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
            @else
            <img class="image-post" src="https://source.unsplash.com/700x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
        @endif

    </div>
    <p>{!! $post->body !!}</p>
</article>
<a href="/posts">Kembali</a>
@endsection
