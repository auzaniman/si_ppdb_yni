<nav class="navbar bg-light navbar-light navbar-expand-lg p-lg-2">
  <div class="container-fluid me-lg-2">
    <a class="navbar-brand d-none d-lg-block ms-lg-4" href="{{ route('home')}}">
      <img
        src="{{ url ('frontend/assets/img/logo/logo.png')}}"
        class="me-lg-2"
        width="30"
        alt=""
      />
      Yayasan <span class="ni-font">NURUL 'ILMI</span></a
    >
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#main_nav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon">
        <span class="divider"></span>
        <span class="divider2"></span>
        <span class="divider3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        @guest
        <li class="nav-item">
          <form>
            <button class="btn text-white btn-primary nav-link hvr-underline-from-center" onclick="event.preventDefault(); location.href='{{ url('login')}}';" type="button">Login</button>
          </form>
        </li>
        @endguest

        @auth
        <li class="nav-item">
          <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn text-white btn-primary nav-link hvr-underline-from-center" type="submit">Logout</button>
          </form>
        </li>
        @endauth
      </ul>
    </div>
    <!-- navbar-collapse.// -->
  </div>
  <!-- container-fluid.// -->
</nav>
