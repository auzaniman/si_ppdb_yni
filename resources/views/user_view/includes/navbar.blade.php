<nav id="navbar_top" class="fixed-top navbar navbar-expand-lg p-lg-2">
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
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <span class="divider"></span>
        <span class="divider2"></span>
        <span class="divider3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link hvr-underline-from-center" href="">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle hvr-underline-from-center"
            href="#"
            data-bs-toggle="dropdown"
          >
            PAUD
          </a>
          <ul class="dropdown-menu">
            <li class="d-flex">
              <i class="fas fa-school"></i>
              <a class="dropdown-item" href=""> KBIT </a>
            </li>
            <li class="d-flex">
              <i class="fas fa-thumbs-up"></i>
              <a class="dropdown-item" href=""> TKIT 1 </a>
            </li>
            <li class="d-flex">
              <i class="fas fa-thumbs-up"></i>
              <a class="dropdown-item" href=""> TKIT 2 </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-center" href="">SDIT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-center" href="">SMPIT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-center" href="">SMAIT</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle hvr-underline-from-center"
            href=""
            data-bs-toggle="dropdown"
          >
            PROGRAM
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a class="dropdown-item" href=""> TKIT</a></li>
            <li><a class="dropdown-item" href=""> SDIT </a></li>
            <li>
              <a class="dropdown-item" href=""> SMPIT </a>
            </li>
            <li><a class="dropdown-item" href=""> SMAIT </a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- navbar-collapse.// -->
  </div>
  <!-- container-fluid.// -->
</nav>
