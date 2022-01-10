@extends('dashboard.layout.index')

@section('container')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                <h6 class="text-white">Dashboard</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="fas fa-comments"></i></h1>
                <h6 class="text-white">Chat</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="fas fa-video"></i></h1>
                <h6 class="text-white">Videos</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="fas fa-user-friends"></i></h1>
                <h6 class="text-white">Member</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="fas fa-newspaper"></i></h1>
                <h6 class="text-white">Articles</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="fas fa-cog"></i></h1>
                <h6 class="text-white">Setting</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="fas fa-user-circle"></i></h1>
                <h6 class="text-white">Account</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="fas fa-bell"></i></h1>
                <h6 class="text-white">Notification</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="fas fa-money-bill-alt"></i></i></h1>
                <h6 class="text-white">Payment</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                <h6 class="text-white">Editor</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex align-items-center">
                    <div>
                        <h4 class="card-title">Site Analysis</h4>
                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-9">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-user mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">{{ $jumlahAkun }}</h5>
                                    <small class="font-light">Total Users</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-plus mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">120</h5>
                                    <small class="font-light">New Users</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-cart-plus mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">656</h5>
                                    <small class="font-light">Total Shop</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-tag mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">9540</h5>
                                    <small class="font-light">Total Orders</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-table mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">100</h5>
                                    <small class="font-light">Pending Orders</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-globe mb-1 font-16"></i>
                                    <h5 class="mb-0 mt-1">8540</h5>
                                    <small class="font-light">Online Orders</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Latest Posts</h4>
            </div>
            <div class="comment-widgets scrollable">
                <!-- Comment Row -->
                @foreach($postingan as $post)
                <div class="d-flex flex-row comment-row">
                    <div class="comment-text w-100">
                        <h6 class="font-medium">{{ $post->title }}</h6>
                        <span class="mb-3 d-block">{!! Str::limit($post->excerpt, 80, '...') !!}</span>
                        <div class="comment-footer">
                            <span class="text-muted float-end">{{ $post->updated_at->format('d, M Y H:i') }}</span>
                            <button type="button" class="btn btn-cyan btn-sm text-white">Edit</button>
                            <button type="button" class="btn btn-success btn-sm text-white">Publish</button>
                            <button type="button" class="btn btn-danger btn-sm text-white">Delete</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
