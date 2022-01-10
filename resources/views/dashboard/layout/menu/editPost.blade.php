@extends('dashboard.layout.index')

@section('container')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Post</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
    </div>
</div>
<div class="row">
   <h3 class="mt-3">Update Artikel</h3>
</div>

<div class="col-lg-8">
 <div class="card border-primary mb-3">
    <form class="p-5" method="POST" action="/dashboard/posts/{{ $post->slug }}">
        @method('put')
        @csrf
        <div class="form-group">
          <label for="title">Judul</label>
          <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required autofocus>
          @error('title')
           <div class="invalid-feedback">
               {{ $message }}
           </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input class="form-control @error('slug') is-invalid @enderror" type="text" name="slug" class="form-control" value="{{ old('slug',$post->slug) }}"  required id="slug" readonly>
          @error('slug')
           <div class="invalid-feedback">
               {{ $message }}
           </div>
          @enderror
        </div>
        <div class="form-group">
            <label for="category">Kategori</label>
            <select class="form-select" name="category_id" required>
              @foreach($categories as $category)
                @if(old('category_id', $post->category_id) == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="body">Content</label>
          @error('body')
            <p class="text-danger">{{ $message }}</p>
         @enderror
         <div>
            <textarea class="form-control" name="body" id="body" cols="0" rows="8" required>{{ old('body', $post->body) }}</textarea>
          </div>
          </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
</div>

<script>
   const title = document.querySelector('#title');
   const slug = document.querySelector('#slug');


   title.addEventListener('change',function() {
     fetch('/dashboard/posts/autoSlug?title=' + title.value)
       .then(response => response.json())
        .then(data => slug.value = data.slug)
   });
</script>




<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>


<script>
    CKEDITOR.replace( 'body' );
</script>
@endsection
