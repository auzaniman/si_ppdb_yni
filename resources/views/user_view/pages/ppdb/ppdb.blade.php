@extends('user_view.layouts.app_ppdb')

@section('title')
  PPDB Online
@endsection

@section('content')
<!-- JUMBOTRON -->
<section class="jumbotron">
  <div class="p-5 mb-4 bg-dark">
    <div class="container-fluid py-5 mt-lg-5">
      <h1 class="display-5 fw-bold">Selamat Datang</h1>
      <h1 class="display-5 fw-bold">
        PPDB Online <span class="ni-font">Nurul 'Ilmi</span>
      </h1>
      <p class="col-md-8 fs-4">
        Menjadi lembaga pendidikan unggul dan profesional dalam mencetak SDM yang berkarakter, kompetitif dan berwawasan global.
      </p>
      <button class="btn-custom border-0">
        <a href="#daftar_sekolah" class="text-decoration-none"
          >Daftar Sekarang</a
        >
      </button>
    </div>
  </div>
</section>
<!-- JUMBOTRON END -->

<!-- UNIT -->
<section class="unit-pendaftaran container p-lg-5 mt-4" id="daftar_sekolah">
  <div class="row mt-4">
    <h2 class="text-center mb-lg-4">PENDAFTARAN SEKOLAH</h2>
  </div>
  <div class="row text-center mt-lg-5 mb-lg-4">
    <div class="col-lg-6">
      <img
        src="{{ url ('frontend/assets/img/YNI/KBIT/logo.jpeg')}}"
        class="img-fluid"
        width="200"
        height="200"
        alt=""
      />
      <p class="fs-3">KBIT</p>
      <div class="mb-2">
        <button class="btn-custom btn-red border-0">
          <a href="" class="text-decoration-none"
            >Kunjungi Profil</a
          >
        </button>
      </div>
      <div>
        <button class="btn-custom btn-red border-0">
          <a href="" class="text-decoration-none"
            >Daftar</a
          >
        </button>
      </div>
    </div>
    <div class="col-lg-6">
      <img
        src="{{ url ('frontend/assets/img/YNI/TKIT1/logo.png')}}"
        class="img-fluid"
        width="200"
        height="200"
        alt=""
      />
      <p class="fs-3">TKIT 1</p>
      <div class="mb-2">
        <button class="btn-custom btn-red border-0">
          <a href="" class="text-decoration-none"
            >Kunjungi Profil</a
          >
        </button>
      </div>
      <div>
        <button class="btn-custom btn-red border-0">
          <a href="{{ route('ppdb_tkit1.create')}}" class="text-decoration-none"
            >Daftar</a
          >
        </button>
      </div>
    </div>
    <div class="col-lg-6">
      <img
        src="{{ url ('frontend/assets/img/YNI/TKIT2/logo.jpg')}}"
        class="img-fluid"
        width="200"
        height="200"
        alt=""
      />
      <p class="fs-3">TKIT 2</p>
      <div class="mb-2">
        <button class="btn-custom btn-blue border-0">
          <a href="" class="text-decoration-none"
            >Kunjungi Profil</a
          >
        </button>
      </div>
      <div>
        <button class="btn-custom btn-blue border-0">
          <a href="" class="text-decoration-none"
            >Daftar</a
          >
        </button>
      </div>
    </div>
  </div>
  <div class="row text-center mt-lg-5 mb-lg-4">
    <div class="col-lg-4">
      <img
        src="{{ url ('frontend/assets/img/YNI/SDIT/logo.png')}}"
        class="img-fluid"
        width="200"
        height="200"
        alt=""
      />
      <p class="fs-3">SDIT</p>
      <div class="mb-2">
        <button class="btn-custom btn-red border-0">
          <a href="" class="text-decoration-none"
            >Kunjungi Profil</a
          >
        </button>
      </div>
      <div>
        <button class="btn-custom btn-red border-0">
          <a href="{{ route('ppdb_sdit.create')}}" class="text-decoration-none"
            >Daftar</a
          >
        </button>
      </div>
    </div>
    <div class="col-lg-4">
      <img
        src="{{ url ('frontend/assets/img/YNI/SMPIT/logo.png')}}"
        class="img-fluid"
        width="200"
        height="200"
        alt=""
      />
      <p class="fs-3">SMPIT</p>
      <div class="mb-2">
        <button class="btn-custom btn-blue border-0">
          <a href="" class="text-decoration-none"
            >Kunjungi Profil</a
          >
        </button>
      </div>
      <div>
        <button class="btn-custom btn-blue border-0">
          <a href="{{ route('ppdb_smpit.create')}}" class="text-decoration-none"
            >Daftar</a
          >
        </button>
      </div>
    </div>

    <div class="col-lg-4">
      <img
        src="{{ url ('frontend/assets/img/YNI/SMAIT/logo.png')}}"
        class="img-fluid"
        width="200"
        height="200"
        alt=""
      />
      <p class="fs-3">SMAIT</p>
      <div class="mb-2">
        <button class="btn-custom btn-green border-0">
          <a href="" class="text-decoration-none"
            >Kunjungi Profil</a
          >
        </button>
      </div>
      <div>
        <button class="btn-custom btn-green border-0">
          <a href="{{ route('ppdb_smait.create')}}" class="text-decoration-none"
            >Daftar</a
          >
        </button>
      </div>
    </div>
  </div>
</section>
<!-- UNIT END -->

<!-- ALUR PENDAFTARAN -->
<section class="alur-pendaftaran p-lg-5" id="alur">
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5 mt-3 text-center">
      <h1 class="display-5 fw-bold">Alur Pendaftaran</h1>
      <h1 class="display-5 fw-bold">
        PPDB Online <span class="ni-font">Nurul 'Ilmi</span>
      </h1>

      {{-- Roadmap --}}
      <div class="container mt-5">
        <div class="row">
          <div class="col">
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
              <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">1</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Daftar Online</p>
                </div>
              </div>
              <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">2</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Mengisi Data Calon Siswa</p>
                </div>
              </div>
              <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">3</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Transfer Biaya Pendaftaran</p>
                </div>
              </div>
              <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">4</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Tes Wawancara Siswa-Ortu</p>
                </div>
              </div>
              <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">5</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Pengumuman</p>
                </div>
              </div>
              <div class="timeline-step mb-0">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">6</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Daftar Ulang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- End Roadmap --}}
    </div>
  </div>
</section>
<!-- ALUR PENDAFTARAN END -->
@endsection
