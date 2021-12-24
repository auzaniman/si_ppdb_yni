@extends('user_view.layouts.app_yayasan')

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
        style="background-image: url(frontend/assets/img/YNI/SMAIT/1.jpeg)"
      ></div>
      <div class="container">
        <h1>Yayasan <span class="ni-font">Nurul 'Ilmi</span></h1>
        <h1>Koetai Kartanagara</h1>
        <p>
          Menjadi lembaga pendidikan unggul dan profesional dalam mencetak SDM yang berkarakter, kompetitif dan berwawasan global.
        </p>
        <button class="btn-custom border-0">
          <a href="#unit_sekolah" class="text-decoration-none"
            >Unit Sekolah</a
          >
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <div
        class="overlay-image"
        style="background-image: url(frontend/assets/img/YNI/SMAIT/2.jpeg)"
      ></div>
      <div class="container">
        <h1>Yayasan <span class="ni-font">Nurul 'Ilmi</span></h1>
        <h1>Koetai Kartanagara</h1>
        <p>
          Menjadi taman bermain dan belajar yang menyenangkan dengan pembiasaan nilai-nilai islami.
        </p>
        <button class="btn-custom border-0">
          <a href="#unit_sekolah" class="text-decoration-none"
            >Unit Sekolah</a
          >
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <div
        class="overlay-image"
        style="background-image: url(frontend/assets/img/YNI/SMAIT/3.jpeg)"
      ></div>
      <div class="container">
        <h1>Yayasan <span class="ni-font">Nurul 'Ilmi</span></h1>
        <h1>Koetai Kartanagara</h1>
        <p>
          Terwujudnya Sekolah Islam Terpadu yang Ungugl, Bersih dan Berkarakter berlandaskan IMTAQ dan IPTEK.
        </p>
        <button class="btn-custom border-0">
          <a href="#unit_sekolah" class="text-decoration-none"
            >Unit Sekolah</a
          >
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
<section class="pt-5 mt-5" id="unit_sekolah">
  <h2 class="text-center mt-4">UNIT SEKOLAH</h2>
  <section class="section-popular-content mt-5 pt-3">
    <div class="container">
      <div class="section-popular-unit row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3 me-4">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(frontend/assets/img/YNI/TKIT1/5.jpg)"
          >
            <div class="unit-title mt-4 fw-bold">
              KBIT <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0">
                <a href="{{ route ('ppdb') }}" class="text-decoration-none"
                  >Kunjungi Profil</a
                >
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(frontend/assets/img/YNI/TKIT1/6.jpg)"
          >
            <div class="unit-title mt-4 fw-bold">
              TKIT 1 <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0">
                <a href="{{ route ('ppdb') }}" class="text-decoration-none"
                  >Kunjungi Profil</a
                >
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 ms-4">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(frontend/assets/img/YNI/TKIT2/4.jpg)"
          >
            <div class="unit-title mt-4 fw-bold">
              TKIT 2 <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0">
                <a href="{{ route ('ppdb') }}" class="text-decoration-none"
                  >Kunjungi Profil</a
                >
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="section-popular-unit row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3 me-4">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(frontend/assets/img/YNI/SDIT/1.jpeg)"
          >
            <div class="unit-title mt-4 fw-bold">
              SDIT <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0">
                <a href="{{ route ('ppdb') }}" class="text-decoration-none"
                  >Kunjungi Profil</a
                >
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(frontend/assets/img/YNI/SMPIT/7.jpg)"
          >
            <div class="unit-title mt-4 fw-bold">
              SMPIT <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0">
                <a href="{{ route ('ppdb') }}" class="text-decoration-none"
                  >Kunjungi Profil</a
                >
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 ms-4">
          <div
            class="card-unit d-flex flex-column text-center"
            style="background-image: url(frontend/assets/img/YNI/SMAIT/1.jpeg)"
          >
            <div class="unit-title mt-4 fw-bold">
              SMAIT <span class="ni-font">Nurul 'Ilmi</span>
            </div>
            <div class="unit-lokasi mt-2">Tenggarong</div>
            <div class="mt-auto">
              <button class="btn-custom border-0">
                <a href="{{ route ('ppdb') }}" class="text-decoration-none"
                  >Kunjungi Profil</a
                >
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<!-- UNIT SEKOLAH END -->

<!-- PROGRAM -->
<section class="program" id="program_sekolah">
  <div
    class="content-2-2 container-xxl mx-auto p-0 position-relative"
    style="font-family: 'Poppins', sans-serif">
    <div class="text-center title-text">
      <h1 class="text-title">3 Nilai Nurul Ilmi</h1>
      <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
        You can easily manage your business with a powerful tools
      </p>
    </div>

    <div class="grid-padding text-center">
      <div class="row">
        <div class="col-lg-4 column">
          <div class="icon">
            <img
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png"
              alt=""
            />
          </div>
          <h3 class="icon-title">Easy to Operate</h3>
          <p class="icon-caption">
            This can easily help you to<br />
            grow up your business fast
          </p>
        </div>
        <div class="col-lg-4 column">
          <div class="icon">
            <img
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png"
              alt=""
            />
          </div>
          <h3 class="icon-title">Real-Time Analytic</h3>
          <p class="icon-caption">
            With real-time analytics, you<br />
            can check data in real time
          </p>
        </div>
        <div class="col-lg-4 column">
          <div class="icon">
            <img
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png"
              alt=""
            />
          </div>
          <h3 class="icon-title">Very Full Secured</h3>
          <p class="icon-caption">
            With real-time analytics, we<br />
            will guarantee your data
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- PROGRAM END -->

<!-- KABAR BERITA -->
<section class="wrapper-kabar-berita" id="kabar_berita">
  <h2 class="text-center">KABAR BERITA</h2>
  <div class="center mt-4">
    <div>
      <div class="card">
        <img src="{{ url ('frontend/assets/img/YNI/SMAIT/3.jpeg')}}" class="card-img-top" alt="..." />

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
        <img src="{{ url ('frontend/assets/img/YNI/SMAIT/3.jpeg')}}" class="card-img-top" alt="..." />

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
        <img src="{{ url ('frontend/assets/img/YNI/SMAIT/3.jpeg')}}" class="card-img-top" alt="..." />

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
        <img src="{{ url ('frontend/assets/img/YNI/SMAIT/3.jpeg')}}" class="card-img-top" alt="..." />

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
        <img src="{{ url ('frontend/assets/img/YNI/SMAIT/3.jpeg')}}" class="card-img-top" alt="..." />

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
<section class="wrapper-testimoni mt-lg-5 mt-3 p-lg-5 p-2" id="testi">
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
            src="{{ url ('frontend/assets/img/YNI/guru.jpeg')}}"
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
            src="{{ url ('frontend/assets/img/face1.jpg')}}"
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


