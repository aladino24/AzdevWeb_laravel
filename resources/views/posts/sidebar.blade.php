<div class="col-12 col-lg-3 ">
    <div class="container-fluid blog-category rounded">
    <form class="mt-4">
        <h4><i class="fas fa-fire"></i> News Updates</h4>
        <p style="color:#36a3f1">Dapatkan informasi terbaru dan terpopuler dari kami</p>
        <div class="form-group mt-5">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">Gunakan Akun Gmail</small>
        </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
      </form>
      <br><br>
      <hr>
      <h4>Kategori Artikel</h4>
      <hr>
      <div class="box-category-article">
       @foreach ($categories as $category)
    <ul>
        <li><a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a></li>
    </ul>
    @endforeach
      </div>
    </div>

    <div class="container mt-3 artikel-terbaru rounded">
        <h4 class="mt-2"><i class="fas fa-newspaper"> Artikel Terbaru</i></h4>
        <hr>
        <ul>
            @if($sidebar->count())
                @for($i = 1; $i <= 4; $i++)
                  <a href="/post/{{ $sidebar[$i]->slug }}" class="text-decoration-none text-dark"><li>{{ $sidebar[$i]->title }}</li></a>
                  <hr>
                @endfor

            @else
              <p class="text-center fs-4">Tidak Ada Artikel</p>

            @endif
        </ul>
    </div>

</div>



