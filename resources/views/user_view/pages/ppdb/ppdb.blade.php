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
    <div class="col-lg-4">
      <img
        src="{{ url ('frontend/assets/img/logo/logo.png')}}"
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
        src="{{ url ('frontend/assets/img/logo/logo.png')}}"
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
        src="{{ url ('frontend/assets/img/logo/logo.png')}}"
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

<section class="wrapper-timeline" id="timeline">
  <div id="jadwal" class="content-area-l5-2">
    <div class="container">
      <div
        class="
          row
          justify-content-lg-start justify-content-center
          align-items-start
        "
      >
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="content-l5-2-content section__heading-2">
            <h3>
              Persyaratan Daftar Ulang:
            </h3>
            <ul class="mt-3">
              <li>Menunjukkan Kuitansi/Bukti Pembayaran/Nomor Registrasi</li>
              <li>Pas Foto Warna</li>
              <li>Fotokopi Raport</li>
              <li>Fotokopi Kartu Keluarga</li>
              <li>Fotokopi Piagam</li>
              <li>Fotokopi Ijazah</li>
              <li>Biaya Pendaftaran</li>
            </ul>
          </div>
        </div>
        <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-10">
          <div id="timeline-content">
            <h3 class="ms-5">
              Lini Masa PPDB Online SMAIT
              <br />
              <span class="ni-font">Nurul 'Ilmi</span>
            </h3>
            <ul class="timeline">
              <li class="event" data-date="1">
                <h3>Pendaftaran Online Gelombang 1</h3>
                <p>1 Desember 2021 - 25 April 2022</p>
              </li>
              <li class="event" data-date="2">
                <h3>Pendaftaran Online Gelombang 2</h3>
                <p>16 Mei - 20 Juli 2022</p>
              </li>
              <li class="event" data-date="3">
                <h3>Pengumuman</h3>
                <p>-</p>
              </li>
              <li class="event" data-date="4">
                <h3>Daftar Ulang</h3>
                <p>-</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ALUR PENDAFTARAN END -->
@endsection
