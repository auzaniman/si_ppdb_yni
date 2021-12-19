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
        Menjadi lembaga pendidikan unggul dan profesional dalam mencetak SDM yang berkarakter, kompetitif dan berwawasan global.
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

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

{{-- Timeline --}}
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
{{-- End Timeline --}}

<!-- FORM PENDAFTARAN -->
<section class="form-pendaftaran">
  <h2 class="text-center mt-lg-5 text-uppercase pt-5">
    Formulir Pendaftaran Online
  </h2>

@guest
<section class="py-2 cta-cr" id="download-soft-ui">
  <div class="bg-gradient-dark position-relative m-3 border-radius overflow-hidden">
    <img src="{{ url ('frontend/assets/img/waves-white.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
    <div class="container py-7 postion-relative z-index-2 position-relative">
      <div class="row">
        <div class="col-md-7 mx-auto text-center">
          <h3 class="text-white mb-0">Jadi Bagian Keluarga Nurul 'Ilmi</h3>
          <h3 class="text-warning text-gradient mb-4">Tak kenal maka tak sayang.. Tak sayang maka tak berkembang</h3>
          <p class="text-white mb-5">Ayo buat akun terlebih dahulu untuk melanjutkan mendaftar</p>
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
    <form action="{{ route('ppdb_tkit1.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <h5 class="card-title mb-2">Pendaftaran untuk TKIT 1</h5>
        <h6 class="information">Silahkan isi formulir pendaftaran</h6>
        <div class="row mt-3">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="school_id">Pilihan Sekolah</label>
              <select name="school_id" class="form-control wide mt-0 mb-2">
                <option data-display="Pilih">-</option>
                @foreach ($schools as $school)
                <option value="{{ $school->id }}">
                {{ $school->jenjang }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="nama">Nama Siswa</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama')}}"
              />
              @error('nama')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="nama_panggilan">Nama Panggilan</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nama_panggilan"
                name="nama_panggilan"
                value="{{ old('nama_panggilan') }}"
              />
              @error('nama_panggilan')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="kelamin">Jenis Kelamin</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="kelamin"
                name="kelamin"
                value="{{ old('kelamin') }}"
              />
              @error('kelamin')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
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
                value="{{ old('nik') }}"
              />
              @error('nik')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="ttl">Tempat Tanggal Lahir</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="ttl"
                name="ttl"
                value="{{ old('ttl') }}"
              />
              @error('ttl')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="trans_sekolah">Transportasi ke Sekolah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="trans_sekolah"
                name="trans_sekolah"
                value=""
              />
              @error('trans_sekolah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="no_akta">No. Akta</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="no_akta"
                name="no_akta"
                value="{{ old('no_akta') }}"
              />
              @error('no_akta')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="hp_ortu">Nomor HP</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="hp_ortu"
                name="hp_ortu"
                value="{{ old('hp_ortu') }}"
              />
              @error('hp_ortu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="tb">Tinggi Badan</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="tb"
                name="tb"
                value="{{ old('tb') }}"
              />
              @error('tb')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="bb">Berat Badan</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="bb"
                name="bb"
                value="{{ old('bb') }}"
              />
              @error('bb')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="lingkar_kepala">Lingkar Kepala</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="lingkar_kepala"
                name="lingkar_kepala"
                value="{{ old('lingkar_kepala') }}"
              />
              @error('lingkar_kepala')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jarak_waktu">Jarak dan Waktu Tempuh ke Sekolah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jarak_waktu"
                name="jarak_waktu"
                value="{{ old('jarak_waktu') }}"
              />
              @error('jarak_waktu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jumlah_saudara">Jumlah Saudara Kandung</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jumlah_saudara"
                name="jumlah_saudara"
                value="{{ old('jumlah_saudara') }}"
              />
              @error('jumlah_saudara')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
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
                value="{{ old('nama_ayah') }}"
              />
              @error('nama_ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="ttl_ayah">Tempat Tanggal Lahir Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="ttl_ayah"
                name="ttl_ayah"
                value="{{ old('ttl_ayah') }}"
              />
              @error('ttl_ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
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
                value="{{ old('pekerjaan_ayah') }}"
              />
              @error('pekerjaan_ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pendidikan_ayah">Pendidikan Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="pendidikan_ayah"
                name="pendidikan_ayah"
                value="{{ old('pendidikan_ayah') }}"
              />
              @error('pendidikan_ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="penghasilan_ayah">Penghasilan Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="penghasilan_ayah"
                name="penghasilan_ayah"
                value="{{ old('penghasilan_ayah') }}"
              />
              @error('penghasilan_ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
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
                value="{{ old('nama_ibu') }}"
              />
              @error('nama_ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="ttl_ibu">Tempat Tanggal Lahir Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="ttl_ibu"
                name="ttl_ibu"
                value="{{ old('ttl_ibu') }}"
              />
              @error('ttl_ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
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
                value="{{ old('pekerjaan_ibu') }}"
              />
              @error('pekerjaan_ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pendidikan_ibu">Pendidikan Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="pendidikan_ibu"
                name="pendidikan_ibu"
                value="{{ old('pendidikan_ibu') }}"
              />
              @error('pendidikan_ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="penghasilan_ibu">Penghasilan Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="penghasilan_ibu"
                name="penghasilan_ibu"
                value="{{ old('penghasilan_ibu') }}"
              />
              @error('penghasilan_ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-center px-5 mt-3 mb-3">
          <small class="agree-text"
            >Dengan mengisi formulir anda sudah masuk dalam daftar
            konfirmasi</small
          >
        </div>
        <button class="btn-custom border-0" type="submit">
            <a class="text-decoration-none">Kirim</a>
        </button>
      </div>
    </form>
  </div>
</div>
@endauth
</section>
<!-- FORM PENDAFTARAN END -->
@endsection
