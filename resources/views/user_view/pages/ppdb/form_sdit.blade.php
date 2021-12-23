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
        PPDB Online SDIT <span class="ni-font">Nurul 'Ilmi</span>
      </h1>
      <p class="col-md-8 fs-4">
        Menjadi sekolah dasar yang terbaik yang menerapkan sistem pendidikan islam terpadu.
      </p>
      <button class="btn-custom border-0">
        <a href="" class="text-decoration-none"
          >Kunjungi Profil</a
        >
      </button>
    </div>
  </div>
</section>
<!-- JUMBOTRON END -->

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
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
              Lini Masa PPDB Online SDIT
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
    <form action="{{ route('ppdb_sdit.store') }}" method="POST">
      @csrf
      <div class="card-body">
        <h5 class="card-title mb-2">Pendaftaran untuk SDIT</h5>
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
              <label for="nama">Nama Lengkap (Sesuai Akta Lahir)</label>
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
                value="{{ old('nama_panggilan')}}"
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
              <label for="jk">Jenis Kelamin</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jk"
                name="jk"
                value="{{ old('Jenis Kelamin') }}"
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
              <label for="akta">No. Registrasi Akta Kelahiran</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="akta"
                name="akta"
                value="{{ old('No. Akta') }}"
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
              <label for="tl">Tempat Lahir</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="tl"
                name="tl"
                value="{{ old('Tempat Lahir') }}"
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
              <label for="ttl">Tanggal Lahir</label>
              <input
                class="form-control mt-0 mb-2"
                type="date"
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
              <label for="agama">Agama</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="agama"
                name="agama"
                value="{{ old('agama') }}"
              />
              @error('agama')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="alamat">Alamat Siswa</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="alamat"
                name="alamat"
                value="{{ old('alamat') }}"
              />
              @error('alamat')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="transport">Alat Transportasi ke Sekolah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="transport"
                name="transport"
                value="{{ old('transport') }}"
              />
              @error('transport')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="j_tinggal">Jenis Tinggal</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="j_tinggal"
                name="j_tinggal"
                value="{{ old('j_tinggal') }}"
              />
              @error('j_tinggal')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jarak">Jarak Tempat Tinggal Ke Sekolah (m/km)</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jarak"
                name="jarak"
                value="{{ old('jarak') }}"
              />
              @error('jarak')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="waktu">Waktu Tempuh Ke Sekolah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="waktu"
                name="waktu"
                value="{{ old('waktu') }}"
              />
              @error('waktu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="penyakit">Penyakit yang pernah diderita</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="penyakit"
                name="penyakit"
                value="{{ old('penyakit') }}"
              />
              @error('penyakit')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
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
              <label for="e_mail">Email jika punya</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="e_mail"
                name="e_mail"
                value="{{ old('e_mail') }}"
              />
              @error('e_mail')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="kip">No. KIP (Kartu Indonesia Pintar)</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="kip"
                name="kip"
                value="{{ old('kip') }}"
              />
              @error('kip')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="anak">Anak Keberapa</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="anak"
                name="anak"
                value="{{ old('anak') }}"
              />
              @error('anak')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="saudara">Jumlah Saudara Kandung</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="saudara"
                name="saudara"
                value="{{ old('saudara') }}"
              />
              @error('saudara')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="tiri">Jumlah Saudara Tiri</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="tiri"
                name="tiri"
                value="{{ old('tiri') }}"
              />
              @error('tiri')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="angkat">Jumlah Saudara Angkat</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="angkat"
                name="angkat"
                value="{{ old('angkat') }}"
              />
              @error('angkat')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="bahasa">Bahasa Sehari-hari dirumah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="bahasa"
                name="bahasa"
                value="{{ old('bahasa') }}"
              />
              @error('bahasa')
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
              <label for="gd">Golongan Darah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="gd"
                name="gd"
                value="{{ old('gd') }}"
              />
              @error('gd')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="hobi">Hobi</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="hobi"
                name="hobi"
                value="{{ old('hobi') }}"
              />
              @error('hobi')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
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
                value="{{ old('asal_sekolah') }}"
              />
              @error('asal_sekolah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="alamat_asal">Alamat Asal Sekolah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="alamat_asal"
                name="alamat_asal"
                value="{{ old('alamat_asal') }}"
              />
              @error('alamat_asal')
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
              <label for="nik_ayah">NIK Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nik_ayah"
                name="nik_ayah"
                value="{{ old('nik_ayah') }}"
              />
              @error('nik_ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="ttl_ayah">TTL Ayah</label>
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
              <label for="p_ayah">Pendidikan Terakhir Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="p_ayah"
                name="p_ayah"
                value="{{ old('p_ayah') }}"
              />
              @error('p_ayah')
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
              <label for="tk_ayah">Tempat Kerja Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="tk_ayah"
                name="tk_ayah"
                value="{{ old('tk_ayah') }}"
              />
              @error('tk_ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="penghasilan_ayah">Penghasilan Perbulan Ayah</label>
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
              <label for="nik_ibu">NIK Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nik_ibu"
                name="nik_ibu"
                value="{{ old('nik_ibu') }}"
              />
              @error('nik_ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="ttl_ibu">TTL Ibu</label>
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
              <label for="p_ibu">Pendidikan Terakhir Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="p_ibu"
                name="p_ibu"
                value="{{ old('p_ibu') }}"
              />
              @error('p_ibu')
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
              <label for="tk_ibu">Tempat Kerja Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="tk_ibu"
                name="tk_ibu"
                value="{{ old('tk_ibu') }}"
              />
              @error('tk_ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="penghasilan_ibu">Penghasilan Perbulan Ibu</label>
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
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="alamat_ortu">Alamat Rumah Orangtua</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="alamat_ortu"
                name="alamat_ortu"
                value="{{ old('alamat_ortu') }}"
              />
              @error('alamat_ortu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="nama_wali">Nama Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nama_wali"
                name="nama_wali"
                value="{{ old('nama_wali') }}"
              />
              @error('nama_wali')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="p_wali">Pendidikan Terakhir Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="p_wali"
                name="p_wali"
                value="{{ old('p_wali') }}"
              />
              @error('p_wali')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pekerjaan_wali">Pekerjaan Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="pekerjaan_wali"
                name="pekerjaan_wali"
                value="{{ old('pekerjaan_wali') }}"
              />
              @error('pekerjaan_wali')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="penghasilan_wali">Penghasilan Perbulan Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="penghasilan_wali"
                name="penghasilan_wali"
                value="{{ old('penghasilan_wali') }}"
              />
              @error('penghasilan_wali')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="hp_wali">No. HP Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="hp_wali"
                name="hp_wali"
                value="{{ old('hp_wali') }}"
              />
              @error('hp_wali')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="alamat_wali">Alamat Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="alamat_wali"
                name="alamat_wali"
                value="{{ old('alamat_wali') }}"
              />
              @error('alamat_wali')
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
