@extends('register.main_register')


@section('register')

<section class="mb-4">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-7">


                <div class="card login-card" style="width: 100%;">
                    <div class="card-body">
                        <img class="mx-auto d-block mt-2" src="{{ url('AzdevWeb/img/logobrand.png') }}" alt="" width="50%">
                        <form action="/register" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="name" aria-describedby="emailHelp" required value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                 <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" aria-describedby="emailHelp" value="{{ old('username') }}" >
                                 @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                            <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" value="{{ old('email') }}" required>
                                <small id="emailHelp" class="form-text text-muted">Gunakan Akun Gmail</small>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                            <label for="password">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Registrasi</button>
                            <p class="mt-2">Already have an account? <a href="/login">Login</a></p>
                        </form>
                    </div>
                </div>


        </div>
        </div>
    </div>
  </section>

  <div class="custom-shape-divider-bottom-1628930021">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>


@endsection
