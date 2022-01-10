<div class="container-fluid nav-box fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light custom-nav" id="section-home">
        <a class="navbar-brand" href="#">
            <img src="{{ url('AzdevWeb/img/logobrand.png') }}" alt="Azdev Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav" id="nav-scroll">
            <li class="nav-item active">
              <a class="nav-link page-scroll" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/posts">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/categories/">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/videos">Videos</a>
              </li>
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ auth()->user()->name }}&ensp;
                  <img class="profile-navbar mb-3" src="{{ url('AzdevWeb/img/user.png') }}" alt="" width="30" height="30">
                </a>
                <div class="dropdown-menu ml-lg-5" aria-labelledby="navbarDropdownMenuLink">
                  <a  class="dropdown-item" href="/posts"><i class="fas fa-newspaper"></i> Blogs</a>
                  <a class="dropdown-item" href="/dashboard/beranda"><i class="fas fa-chalkboard-teacher"></i> Dashboard</a>
                  {{-- <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a> --}}
                  <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
                  </form>
                </div>
              </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link btn btn-primary login-button" href="/login">Login</a>
                  </li>
              @endauth
          </ul>
        </div>
      </nav>
      </div>
