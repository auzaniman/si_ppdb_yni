@extends('user_view.layouts.app_ppdb')

@section('title')
  Formulir PPDB Online
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

<!-- FORM PENDAFTARAN -->
@guest
<section class="py-2 cta-cr" id="download-soft-ui">
  <div class="bg-gradient-dark position-relative m-3 border-radius overflow-hidden">
    <img src="{{ url ('frontend/assets/img/waves-white.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
    <div class="container py-7 postion-relative z-index-2 position-relative">
      <div class="row">
        <div class="col-md-7 mx-auto text-center">
          <h3 class="text-white mb-0">Jadi Bagian Keluarga Nurul 'Ilmi</h3>
          <h3 class="text-warning text-gradient mb-4">Tak kenal maka tak sayang.. Tak sayang maka tak berkembang</h3>
          <p class="text-white mb-5">Kenali lebih dalam sekolah Nurul 'Ilmi. Ayo Login untuk melanjutkan mendaftar</p>
          <button class="btn-custom border-0" onclick="event.preventDefault(); location.href='{{ url('register')}}';" type="button">
              <a class="text-decoration-none"
                >Buat Akun</a
              >
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
@endguest

@auth
<div class="container mt-3 mb-5 d-flex justify-content-center">
  <div class="card px-1 py-4">
    <form action="" method="POST">
      @csrf
      <div class="card-body">
        <h5 class="card-title mb-2">Pendaftaran untuk SMAIT</h5>
        <h6 class="information">Silahkan isi formulir pendaftaran</h6>
        <div class="row mt-3">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="nama">Nama Siswa</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nama"
                name="nama"
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
              <label for="nama_ayah">Nama Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nama_ayah"
                name="nama_ayah"
                value=""
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="pekerjaan_ayah"
                name="pekerjaan_ayah"
                value=""
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="nama_ibu">Nama Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nama_ibu"
                name="nama_ibu"
                value=""
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="pekerjaan_ibu"
                name="pekerjaan_ibu"
                value=""
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="ukuran_baju">Ukuran Baju</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="ukuran_baju"
                name="ukuran_baju"
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
              <label for="pilihan_tinggal">Pilihan Tinggal</label>
              <select name="pilihan_tinggal" class="form-control wide mt-0 mb-2">
                <option data-display="Pilih">-</option>
                <option value="Asrama">Asrama</option>
                <option value="Reguler">Reguler</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pilihan_jurusan">Jurusan</label>
              <select name="pilihan_jurusan" class="form-control wide mt-0 mb-2">
                <option data-display="Pilih">-</option>
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pilihan_program">Jurusan Program</label>
              <select name="pilihan_program" class="form-control wide mt-0">
                <option data-display="Pilih"></option>
                <option value="Reguler">Reguler</option>
                <option value="Tahfidz">Tahfidz</option>
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
@endauth
<!-- FORM PENDAFTARAN END -->
@endsection
