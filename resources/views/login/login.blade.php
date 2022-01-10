@extends('login.main_login')


@section('loginRegister')
<section class="mb-4">
    <div class="container mt-5">



        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-5">

                 <!-- Flash Message -->
        @if ($pesan = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $pesan }}</strong>
            </div>
        @endif

                <!-- Flash Message -->
        @if ($pesanLogin = Session::get('notifLogin'))
            <div class="alert alert-danger alert-block pesanLogin">
              <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $pesanLogin }}</strong>
            </div>
        @endif

            <div class="card login-card" style="width: 100%;">
                <div class="card-body">
                    <img class="mx-auto d-block mt-2" src="{{ url('AzdevWeb/img/logobrand.png') }}" alt="" width="65%">
                    <form class="mt-4" action="/login" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" required>
                          <small id="emailHelp" class="form-text text-muted">Gunakan Akun Gmail</small>
                          @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
                        <p class="mt-2">Not Registered? <a href="/register">Register Now!</a></p>
                      </form>
                </div>
              </div>

            </div>
        </div>
    </div>
  </section>

  {{-- <div class="loading-page">
  <div class="loadingio-spinner-cube-s1jc41lr4n preloader"><div class="ldio-xwf4cahgz9c">
    <div></div><div></div><div></div><div></div>
    </div></div>
  </div> --}}

  <div class="custom-shape-divider-bottom-1628784513">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
@endsection
