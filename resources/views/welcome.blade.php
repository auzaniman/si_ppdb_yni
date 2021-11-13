<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('user_view.components.style')

    <title>Yayasan Nurul 'Ilmi</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav id="navbar_top" class="fixed-top navbar navbar-expand-lg p-lg-2">
      <div class="container-fluid me-lg-2">
        <a class="navbar-brand d-none d-lg-block ms-lg-4" href="#">
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
            <li class="nav-item active">
              <a class="nav-link hvr-underline-from-center" href="#">HOME</a>
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
                  <a class="dropdown-item" href="#"> KBIT </a>
                </li>
                <li class="d-flex">
                  <i class="fas fa-thumbs-up"></i>
                  <a class="dropdown-item" href="#"> TKIT 1 </a>
                </li>
                <li class="d-flex">
                  <i class="fas fa-thumbs-up"></i>
                  <a class="dropdown-item" href="#"> TKIT 2 </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-underline-from-center" href="#">SDIT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-underline-from-center" href="#">SMPIT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hvr-underline-from-center" href="#">SMAIT</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                BID. PENDIDIKAN
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                <li>
                  <a class="dropdown-item" href="#">
                    Dropdown item 2 &raquo;
                  </a>
                  <ul class="submenu dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">Submenu item 1</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Submenu item 2</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Submenu item 3</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    Dropdown item 3 &raquo;
                  </a>
                  <ul class="submenu dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">Another submenu 1</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another submenu 2</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another submenu 3</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another submenu 4</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item" href="#"> Dropdown item 4 &raquo;</a>
                  <ul class="submenu dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">Another submenu 1</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another submenu 2</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another submenu 3</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another submenu 4</a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#"> Dropdown item 5 </a></li>
                <li><a class="dropdown-item" href="#"> Dropdown item 6 </a></li>
              </ul>
            </li> -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle hvr-underline-from-center"
                href="#"
                data-bs-toggle="dropdown"
              >
                PROGRAM
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="#"> TKIT</a></li>
                <li><a class="dropdown-item" href="#"> SDIT </a></li>
                <li>
                  <a class="dropdown-item" href="#"> SMPIT &raquo; </a>
                  <ul class="submenu submenu-left dropdown-menu">
                    <li><a class="dropdown-item" href="">Submenu item 1</a></li>
                    <li><a class="dropdown-item" href="">Submenu item 2</a></li>
                    <li><a class="dropdown-item" href="">Submenu item 3</a></li>
                    <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="#"> SMAIT </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- navbar-collapse.// -->
      </div>
      <!-- container-fluid.// -->
    </nav>
    <!-- NAVBAR END -->

    <!-- UNIT SEKOLAH -->
    <section class="container mt-5 p-3">
      <h2 class="text-center mt-4">UNIT SEKOLAH</h2>
      <div class="accordion">
        <ul>
          <li>
            <div>
              <a href="">
                <h2>KBIT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="">
                <h2>TKIT 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="">
                <h2>TKIT 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="">
                <h2>SDIT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="">
                <h2>SMPIT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
            </div>
          </li>
          <li>
            <div>
              <a href="">
                <h2>SMAIT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- UNIT SEKOLAH END -->

    <!-- FOOTER -->
    <footer class="text-center text-lg-start">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-between p-3 social-media text-white"
      >
        <div class="mx-auto">
          <a href="" class="text-white me-4 text-decoration-none">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4 text-decoration-none">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4 text-decoration-none">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="links">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">
                Yayasan <span class="ni-font">Nurul 'Ilmi</span>
              </h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" />
              <p><i class="fas fa-home me-3"></i> Koetai Kartanagara</p>
              <p><i class="fas fa-envelope me-3"></i> yni@gmail.com/p></p>
              <p><i class="fas fa-phone me-3"></i> + 62 xxxxxxxx</p>
              <p><i class="fas fa-print me-3"></i> + 62 xxxxxxxx</p>
            </div>
            <!-- Grid column -->

            <div class="col-lg-2"></div>

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">PROGRAM</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" />
              <p>
                <a href="#!" class="">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">GALERI</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" />
              <p>
                <a href="#!" class="">Your Account</a>
              </p>
              <p>
                <a href="#!" class="">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">UNIT USAHA</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" />
              <p>
                <a href="#!" class="">Your Account</a>
              </p>
              <p>
                <a href="#!" class="">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="">Help</a>
              </p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-2 copyright">
        © 2021 Copyright:
        <a class="" href="#">Real-Engineer1453</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- FOOTER END -->

    @include('user_view.components.script')

    <!-- My JS -->
    <script src="assets/js/app.js"></script>
  </body>
</html>
