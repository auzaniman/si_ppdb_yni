<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('home')}}" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      PPDB Online <span class="ni-font">Nurul 'Ilmi</span>
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">

        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="#">
            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom">Home</p>
          </a>
        </li>

        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="#daftar_sekolah">
            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom">Unit Sekolah</p>
          </a>
        </li>

        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="#alur">
            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom">Alur Pendaftaran</p>
          </a>
        </li>

        @guest
        <li class="nav-item my-auto ms-3 ms-lg-0">
          <form>
            <button type="submit" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0" onclick="event.preventDefault(); location.href='{{ url('login')}}';">Masuk</button>
          </form>
        </li>
        @endguest

        @auth
        <li class="nav-item my-auto ms-3 ms-lg-0">
          <form action="{{ url('logout') }}" method="POST">
            <button type="submit" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Keluar</button>
          </form>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
