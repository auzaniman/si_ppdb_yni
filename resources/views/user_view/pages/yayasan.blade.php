@extends('user_view.layouts.app')

@section('title')
Yayasan Nurul 'Ilmi
@endsection

@section('content')
<!-- HERO -->
<div
  id="myCarousel"
  class="carousel slide carousel-fade"
  data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li
      data-bs-target="#myCarousel"
      data-bs-slide-to="0"
      class="active"
    ></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div
        class="overlay-image"
        style="background-image: url(assets/img/1.jpg)"
      ></div>
      <div class="container">
        <h1>Yayasan <span class="ni-font">Nurul 'Ilmi</span></h1>
        <h1>Koetai Kartanagara</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
          assumenda.
        </p>
        <button class="btn-custom border-0" data-hover="click-me">
          <div>
            <a href="" class="text-reset text-decoration-none"
              >Sign up today</a
            >
          </div>
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <div
        class="overlay-image"
        style="background-image: url(assets/img/2.jpg)"
      ></div>
      <div class="container">
        <h1>Yayasan <span class="ni-font">Nurul 'Ilmi</span></h1>
        <h1>Koetai Kartanagara</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
          assumenda.
        </p>
        <button class="border-0" data-hover="click-me">
          <div>
            <a href="" class="text-reset text-decoration-none"
              >Sign up today</a
            >
          </div>
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <div
        class="overlay-image"
        style="background-image: url(assets/img/3.jpg)"
      ></div>
      <div class="container">
        <h1>Yayasan <span class="ni-font">Nurul 'Ilmi</span></h1>
        <h1>Koetai Kartanagara</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
          assumenda.
        </p>
        <button class="border-0" data-hover="click-me">
          <div>
            <a href="" class="text-reset text-decoration-none"
              >Sign up today</a
            >
          </div>
        </button>
      </div>
    </div>
  </div>
  <a
    href="#myCarousel"
    class="carousel-control-prev"
    role="button"
    data-bs-slide="prev"
  >
    <span class="sr-only">Previous</span>
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a
    href="#myCarousel"
    class="carousel-control-next"
    role="button"
    data-bs-slide="next"
  >
    <span class="sr-only">Next</span>
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>
<!-- HERO END -->

<!-- UNIT SEKOLAH -->
<section class="pt-5 mt-5">
  <h2 class="text-center mt-4">UNIT SEKOLAH</h2>
  <section class="section-popular-content mt-5 pt-3">
    <div class="container">
      <div class="section-popular-unit row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(assets/img/1.jpg)"
          >
            <div class="unit-title mt-4 fw-bold">
              SDIT <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0" data-hover="click-me">
                <div>
                  <a href="" class="text-reset text-decoration-none"
                    >Kunjungi Profil</a
                  >
                </div>
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(assets/img/1.jpg)"
          >
            <div class="unit-title mt-4 fw-bold">
              SDIT <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0" data-hover="click-me">
                <div>
                  <a href="" class="text-reset text-decoration-none"
                    >Kunjungi Profil</a
                  >
                </div>
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(assets/img/1.jpg)"
          >
            <div class="unit-title mt-4 fw-bold">
              SDIT <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0" data-hover="click-me">
                <div>
                  <a href="" class="text-reset text-decoration-none"
                    >Kunjungi Profil</a
                  >
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<!-- UNIT SEKOLAH END -->

<!-- VISI MISI -->
<section class="visi-misi container p-lg-5 p-4 mt-lg-5 mt-3">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <img
        src="assets/img/1.jpg"
        class="img-fluid ms-0"
        alt="yayasan visi"
        width="400"
        height="300"
      />
    </div>
    <div class="col-lg-6">
      <h2 class="">Visi Misi</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
        eum inventore cumque suscipit illum dolorum eligendi hic corporis
        nihil officiis, at animi vel dolores facere?
      </p>
    </div>
  </div>
</section>
<!-- VISI MISI END -->

<!-- PROGRAM -->
<section class="container p-5 mt-4">
  <div class="row mt-4">
    <h2 class="text-center">PROGRAM</h2>
  </div>
  <div class="row text-center mt-4">
    <div class="col-lg-4">
      <i class="fas fa-school"></i>
      <p>Bidang Pendidikan</p>
    </div>
    <div class="col-lg-4">
      <i class="fas fa-school"></i>
      <p>Bidang Sosial</p>
    </div>
    <div class="col-lg-4">
      <i class="fas fa-school"></i>
      <p>Bidang Usaha</p>
    </div>
  </div>
  <div class="row text-center mt-5">
    <div class="col-lg-6">
      <i class="fas fa-school"></i>
      <p>Bidang Kehumasan</p>
    </div>
    <div class="col-lg-6">
      <i class="fas fa-school"></i>
      <p>Bidang Religi</p>
    </div>
  </div>
</section>
<!-- PROGRAM END -->

<!-- KABAR BERITA -->
<section class="wrapper-kabar-berita">
  <h2 class="text-center">KABAR BERITA</h2>
  <div class="center mt-4">
    <div>
      <div class="card">
        <img src="assets/img/1.jpg" class="card-img-top" alt="..." />

        <div class="card-body">
          <div class="card-content">
            <div class="card-title">Kabar Berita 1</div>
            <a href="" class="effect effect-2" title="Baca">Baca</a>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img src="assets/img/2.jpg" class="card-img-top" alt="..." />

        <div class="card-body">
          <div class="card-content">
            <div class="card-title">Kabar Berita 1</div>
            <a href="" class="effect effect-2">Baca</a>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img src="assets/img/3.jpg" class="card-img-top" alt="..." />

        <div class="card-body">
          <div class="card-content">
            <div class="card-title">Kabar Berita 1</div>
            <a href="" class="effect effect-2">Baca</a>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img src="assets/img/2.jpg" class="card-img-top" alt="..." />

        <div class="card-body">
          <div class="card-content">
            <div class="card-title">Kabar Berita 1</div>
            <a href="" class="effect effect-2">Baca</a>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="card">
        <img src="assets/img/1.jpg" class="card-img-top" alt="..." />

        <div class="card-body">
          <div class="card-content">
            <div class="card-title">Kabar Berita 1</div>
            <a href="" class="effect effect-2">Baca</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- KABAR BERITA END -->

<!-- TESTI SAMBUTAN -->
<section class="wrapper-testimoni mt-lg-5 mt-3 p-lg-5 p-2">
  <h2 class="text-center">SAMBUTAN DAN TESTIMONI</h2>
  <div class="testi">
    <div>
      <div class="row align-items-center mt-4">
        <div class="col-lg-6 p-5">
          <div>
            <q
              >Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Vitae ex, voluptatem nulla consequatur officia, aliquam hic
              nam velit magni architecto doloremque rerum perspiciatis
              facilis beatae impedit excepturi aliquid eum unde?</q
            >
            <p class="text-end">Ustadz Y</p>
          </div>
        </div>
        <div class="col-lg-6">
          <img
            src="assets/img/face1.jpg"
            alt=""
            class="img-fluid ms-lg-5 ms-0"
          />
        </div>
      </div>
    </div>
    <div>
      <div class="row align-items-center mt-4">
        <div class="col-lg-6 p-5">
          <div>
            <q
              >Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Vitae ex, voluptatem nulla consequatur officia, aliquam hic
              nam velit magni architecto doloremque rerum perspiciatis
              facilis beatae impedit excepturi aliquid eum unde?</q
            >
            <p class="text-end">Ustadz X</p>
          </div>
        </div>
        <div class="col-lg-6">
          <img
            src="assets/img/face1.jpg"
            alt=""
            class="img-fluid ms-lg-5 ms-0"
          />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- TESTI SAMBUTAN END -->
@endsection

@push('after-script')
<script src="{{ url ('frontend/assets/js/app.js')}}"></script>
@endpush


