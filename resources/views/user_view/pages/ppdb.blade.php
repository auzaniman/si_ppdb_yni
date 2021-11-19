@extends('user_view.layouts.app')

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
        Using a series of utilities, you can create this jumbotron, just
        like the one in previous versions of Bootstrap. Check out the
        examples below for how you can remix and restyle it to your liking.
      </p>
      <button class="btn-custom border-0">
        <a href="{{ route('dashboard')}}" class="text-decoration-none"
          >Kunjungi Profil</a
        >
      </button>
    </div>
  </div>
</section>
<!-- JUMBOTRON END -->

<!-- UNIT -->
<section class="unit-pendaftaran container p-lg-5 mt-4">
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
      <button class="btn-custom btn-red border-0">
        <a href="" class="text-decoration-none"
          >Kunjungi Profil</a
        >
      </button>
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
      <button class="btn-custom btn-blue border-0">
        <a href="" class="text-decoration-none"
          >Kunjungi Profil</a
        >
      </button>
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
      <button class="btn-custom btn-green border-0">
        <a href="" class="text-decoration-none"
          >Kunjungi Profil</a
        >
      </button>
    </div>
  </div>
</section>
<!-- UNIT END -->

<!-- ALUR PENDAFTARAN -->
<section class="alur-pendaftaran p-lg-5">
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5 mt-lg-5 text-center">
      <h1 class="display-5 fw-bold">Alur Pendaftaran</h1>
      <h1 class="display-5 fw-bold">
        PPDB Online <span class="ni-font">Nurul 'Ilmi</span>
      </h1>
      <p class="fs-4">
        Using a series of utilities, you can create this jumbotron, just
        like the one in previous versions of Bootstrap. Check out the
        examples below for how you can remix and restyle it to your liking.
      </p>
      <button class="btn-custom border-0">
        <a href="" class="text-decoration-none"
          >Kunjungi Profil</a
        >
      </button>
    </div>
  </div>
</section>

<section class="wrapper-timeline">
  <div class="timeline-pendaftaran">
    <div>
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
                <h2>
                  Lini Masa PPDB Online SDIT
                  <br />
                  <span class="ni-font">Nurul 'Ilmi</span>
                </h2>
                <p>
                  Pendaftaran akan ditutup di 15 Oktober, dan kegiatan akan
                  berlangsung mulai Oktober hingga Desember.
                </p>
              </div>
            </div>
            <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-10">
              <div id="timeline-content">
                <ul class="timeline">
                  <li class="event" data-date="1">
                    <h3>Pendaftaran Online Gelombang 1</h3>
                    <p>16 Oktober 2021</p>
                  </li>
                  <li class="event" data-date="2">
                    <h3>Test Siswa Baru</h3>
                    <p>18 Oktober - 10 Desember 2021</p>
                  </li>
                  <li class="event" data-date="3">
                    <h3>Pengumuman</h3>
                    <p>Desember</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div id="jadwal" class="content-area-l5-2">
        <div class="container">
          <div
            class="
              row
              justify-content-lg-start justify-content-center
              align-items-start
            "
          >
            <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-10">
              <div id="timeline-content">
                <ul class="timeline">
                  <li class="event" data-date="1">
                    <h3>Pendaftaran Online Gelombang 1</h3>
                    <p>16 Oktober 2021</p>
                  </li>
                  <li class="event" data-date="2">
                    <h3>Test Siswa Baru</h3>
                    <p>18 Oktober - 10 Desember 2021</p>
                  </li>
                  <li class="event" data-date="3">
                    <h3>Pengumuman</h3>
                    <p>Desember</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-10">
              <div class="content-l5-2-content section__heading-2">
                <h2>
                  Lini Masa PPDB Online SDIT
                  <br />
                  <span class="ni-font">Nurul 'Ilmi</span>
                </h2>
                <p>
                  Pendaftaran akan ditutup di 15 Oktober, dan kegiatan akan
                  berlangsung mulai Oktober hingga Desember.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ALUR PENDAFTARAN END -->

<!-- FORM PENDAFTARAN -->
<section class="form-pendaftaran">
  <h2 class="text-center mt-lg-5 text-uppercase">
    Formulir Pendaftaran Online
  </h2>
  <div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">

      <form action="">
        <div class="card-body">
          <h6 class="card-title mb-2">Pendaftaran untuk:</h6>
            <select name="j_program" class="form-control wide mb-3">
              <option data-display="Pilih"></option>
              <option value="1">Reguler</option>
              <option value="2">Tahfidz</option>
              <option value="3">Tahfidz</option>
              <option value="4">Tahfidz</option>
              <option value="5">Tahfidz</option>
            </select>
          <h6 class="information">Silahkan isi formulir pendaftaran</h6>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="siswa">Nama Siswa</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="siswa"
                  name="siswa"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="ttl">TTL</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="ttl"
                  name="ttl"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="alamat"
                  name="alamat"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="asal_sekolah"
                  name="asal_sekolah"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="nik">NIK</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="nik"
                  name="nik"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="nisn">NISN</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="nisn"
                  name="nisn"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="ayah">Nama Ayah</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="ayah"
                  name="ayah"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="p_ayah">Pekerjaan Ayah</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="p_ayah"
                  name="p_ayah"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="ibu">Nama Ibu</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="ibu"
                  name="ibu"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="p_ibu">Pekerjaan Ibu</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="p_ibu"
                  name="p_ibu"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="baju">Ukuran Baju</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="baju"
                  name="baju"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="hp_siswa">No HP Siswa</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="hp_siswa"
                  name="hp_siswa"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="hp_ortu">No HP Ortu</label>
                <input
                  class="form-control mt-0 mb-2"
                  type="text"
                  id="hp_ortu"
                  name="hp_ortu"
                  value=""
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="tinggal">Pilihan Tinggal</label>
                <select name="tinggal" class="form-control wide mt-0 mb-2">
                  <option data-display="Pilih">-</option>
                  <option value="1">Asrama</option>
                  <option value="2">Reguler</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" class="form-control wide mt-0 mb-2">
                  <option data-display="Pilih">-</option>
                  <option value="1">IPA</option>
                  <option value="2">IPS</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="j_program">Jurusan Program</label>
                <select name="j_program" class="form-control wide mt-0">
                  <option data-display="Pilih"></option>
                  <option value="1">Reguler</option>
                  <option value="2">Tahfidz</option>
                </select>
              </div>
            </div>
          </div>

          <div class="d-flex flex-column text-center px-5 mt-3 mb-3">
            <small class="agree-text"
              >Dengan mengisi formulir anda sudah masuk dalam daftar
              konfirmasi</small
            >
          </div>
          <button class="btn-custom border-0">
              <a href="{{ route ('dashboard')}}" class="text-decoration-none">Kirim</a>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- FORM PENDAFTARAN END -->
@endsection