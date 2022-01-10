@extends('dashboard.layout.index')

@section('container')
@include('sweetalert::alert')

<div class="page-breadcrumb">
    <div class="row">
               <!-- Flash Message -->
               @if ($pesan = Session::get('berhasil'))
               <div class="alert alert-success" role="alert">
                  {{ $pesan }}
              </div>
               @endif
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">My Post</h4>
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

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Articles</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead style="background-color: #00BFFF">
                    <tr>
                        <th class="text-center"><b>No</b></th>
                        <th class="text-center"><b>Title</b></th>
                        <th class="text-center"><b>Kategori</b></th>
                        <th class="text-center"><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td class="text-center">
                            <a class="btn btn-info" href="/dashboard/posts/{{ $post->slug }}"><i class="far fa-eye"></i></a>
                            <a  class="btn btn-warning mt-2 mt-lg-0" href="/dashboard/posts/{{ $post->slug }}/edit"><i class="fas fa-edit"></i></a>


                            <form  action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">

                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit"  class="btn btn-danger mt-2 mt-lg-0 text-white show_confirm" data-bs-toggle="modal" data-bs-target="#delete-data"><i class="fas fa-trash-alt"></i></button>

                            </form>





                        </td>
                    </tr>

                @endforeach
            </table>
      </div>
    </div>
</div>

@endsection


