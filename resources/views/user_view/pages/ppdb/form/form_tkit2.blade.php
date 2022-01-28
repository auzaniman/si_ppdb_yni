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
              <li>Fotokopi Kartu Keluarga</li>
              <li>Biaya Pendaftaran</li>
            </ul>
          </div>
        </div>
        <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-10">
          <div id="timeline-content">
            <h3 class="ms-5">
              Lini Masa PPDB Online TKIT 2
              <br />
              <span class="ni-font">Nurul 'Ilmi</span>
            </h3>
            <ul class="timeline">
              <li class="event" data-date="1">
                <h3>Pendaftaran Online Gelombang 1</h3>
                <p>14 Januari - 31 Januari 2022</p>
              </li>
              <li class="event" data-date="4">
                <h3>Daftar Ulang</h3>
                <p>4 Maret - 5 Maret 2022</p>
              </li>
              <li class="event" data-date="2">
                <h3>Pendaftaran Online Gelombang 2</h3>
                <p>18 Maret - 31 Maret 2022</p>
              </li>
              <li class="event" data-date="4">
                <h3>Daftar Ulang</h3>
                <p>4 April - 5 April 2022</p>
              </li>
              <li class="event" data-date="3">
                <h3>Pengumuman</h3>
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
          <p class="text-white mb-5">Kenali lebih dalam sekolah Nurul 'Ilmi. Ayo buat akun terlebih dahulu untuk melanjutkan mendaftar</p>
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
    <form action="{{ route('ppdb_tkit2.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <h5 class="card-title mb-2">Pendaftaran untuk TKIT 2</h5>
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
              <label for="nama_akta">Nama Siswa</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nama_akta"
                name="nama_akta"
                value="{{ old('nama_akta')}}"
              />
              @error('Nama Siswa')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="nama_panggil">Nama Panggilan</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nama_panggil"
                name="nama_panggil"
                value="{{ old('nama_panggil')}}"
              />
              @error('Nama Panggilan')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jenis_kelamin"
                name="jenis_kelamin"
                value="{{ old('jenis_kelamin')}}"
              />
              @error('Jenis Kelamin')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="nik_anak">NIK Siswa</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="nik_anak"
                name="nik_anak"
                value="{{ old('nik_anak')}}"
              />
              @error('NIK')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="tt_lahir">TTL</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="tt_lahir"
                name="tt_lahir"
                value="{{ old('tt_lahir')}}"
              />
              @error('TTL')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="alamat_siswa">Alamat Siswa</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="alamat_siswa"
                name="alamat_siswa"
                value="{{ old('alamat_siswa')}}"
              />
              @error('Alamat Siswa')
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
                value="{{ old('agama')}}"
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
              <label for="transportasi">Transportasi ke Sekolah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="transportasi"
                name="transportasi"
                value="{{ old('transportasi')}}"
              />
              @error('transportasi')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jenis_tinggal">Jenis Tinggal</label>
              <select name="jenis_tinggal" class="form-control wide mt-0 mb-2">
                <option data-display="Pilih">-</option>
                <option value="Rumah Sendiri">Rumah Sendiri</option>
                <option value="Sewa">Sewa</option>
              </select>
              @error('jenis_tinggal')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jarak_tinggal">Jarak Tinggal (Km)</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jarak_tinggal"
                name="jarak_tinggal"
                value="{{ old('jarak_tinggal')}}"
              />
              @error('Jarak Tinggal')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="waktu_tempuh">Waktu Tempuh (menit/jam)</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="waktu_tempuh"
                name="waktu_tempuh"
                value="{{ old('waktu_tempuh')}}"
              />
              @error('Waktu Tempuh')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="penyakit">Penyakit</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="penyakit"
                name="penyakit"
                value="{{ old('penyakit')}}"
              />
              @error('Penyakit')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="anak_ke">Anak ke Berapa</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="anak_ke"
                name="anak_ke"
                value="{{ old('anak_ke')}}"
              />
              @error('Anak ke Berapa')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jml_saudara_kandung">Jumlah Saudara Kandung</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jml_saudara_kandung"
                name="jml_saudara_kandung"
                value="{{ old('jml_saudara_kandung')}}"
              />
              @error('Jumlah Saudara Kandung')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jml_saudara_tiri">Jumlah Saudara Tiri</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jml_saudara_tiri"
                name="jml_saudara_tiri"
                value="{{ old('jml_saudara_tiri')}}"
              />
              @error('Jumlah Saudara Tiri')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="jml_saudara_angkat">Jumlah Saudara Angkat</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="jml_saudara_angkat"
                name="jml_saudara_angkat"
                value="{{ old('jml_saudara_angkat')}}"
              />
              @error('Jumlah Saudara Angkat')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="bahasa_sehari">Bahasa Sehari-hari</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="bahasa_sehari"
                name="bahasa_sehari"
                value="{{ old('bahasa_sehari')}}"
              />
              @error('Bahasa Sehari-hari')
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
                value="{{ old('tb')}}"
              />
              @error('Tinggi Badan')
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
                value="{{ old('bb')}}"
              />
              @error('Berat Badan')
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
                value="{{ old('gd')}}"
              />
              @error('Golongan Darah')
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
                value="{{ old('hobi')}}"
              />
              @error('Hobi')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="cita_cita">Cita-cita</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="cita_cita"
                name="cita_cita"
                value="{{ old('cita_cita')}}"
              />
              @error('Cita-cita')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="sekolah_asal">Sekolah Asal</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="sekolah_asal"
                name="sekolah_asal"
                value="{{ old('sekolah_asal')}}"
              />
              @error('Sekolah Asal')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="alamat_sekolah_asal">Alamat Sekolah Asal</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="alamat_sekolah_asal"
                name="alamat_sekolah_asal"
                value="{{ old('alamat_sekolah_asal')}}"
              />
              @error('Alamat Sekolah Asal')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="no_kk">No KK</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="no_kk"
                name="no_kk"
                value="{{ old('no_kk')}}"
              />
              @error('No KK')
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
                value="{{ old('nama_ayah')}}"
              />
              @error('Nama Ayah')
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
                value="{{ old('nik_ayah')}}"
              />
              @error('NIK Ayah')
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
                value="{{ old('ttl_ayah')}}"
              />
              @error('TTL Ayah')
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
                value="{{ old('pendidikan_ayah')}}"
              />
              @error('Pendidikan Ayah')
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
                value="{{ old('pekerjaan_ayah')}}"
              />
              @error('Pekerjaan Ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="tempat_kerja_ayah">Tempat Kerja Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="tempat_kerja_ayah"
                name="tempat_kerja_ayah"
                value="{{ old('tempat_kerja_ayah')}}"
              />
              @error('Tempat Kerja Ayah')
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
                value="{{ old('penghasilan_ayah')}}"
              />
              @error('Penghasilan Ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="no_ayah">No HP Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="no_ayah"
                name="no_ayah"
                value="{{ old('no_ayah')}}"
              />
              @error('No HP Ayah')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="alamat_ayah">Alamat Ayah</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="alamat_ayah"
                name="alamat_ayah"
                value="{{ old('alamat_ayah')}}"
              />
              @error('Alamat Ayah')
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
                value="{{ old('nama_ibu')}}"
              />
              @error('Nama Ibu')
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
                value="{{ old('nik_ibu')}}"
              />
              @error('NIK Ibu')
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
                value="{{ old('ttl_ibu')}}"
              />
              @error('TTL Ibu')
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
                value="{{ old('pendidikan_ibu')}}"
              />
              @error('Pendidikan Ibu')
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
                value="{{ old('pekerjaan_ibu')}}"
              />
              @error('Pekerjaan Ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="tempat_kerja_ibu">Tempat Kerja Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="tempat_kerja_ibu"
                name="tempat_kerja_ibu"
                value="{{ old('tempat_kerja_ibu')}}"
              />
              @error('Tempat Kerja Ibu')
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
                value="{{ old('penghasilan_ibu')}}"
              />
              @error('Penghasilan Ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="no_ibu">No HP Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="no_ibu"
                name="no_ibu"
                value="{{ old('no_ibu')}}"
              />
              @error('No HP Ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="alamat_ibu">Alamat Ibu</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="alamat_ibu"
                name="alamat_ibu"
                value="{{ old('alamat_ibu')}}"
              />
              @error('Alamat Ibu')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="tinggal_bersama_wali">Tinggal Bersama Wali</label>
              <select name="tinggal_bersama_wali" class="form-control wide mt-0 mb-2">
                <option data-display="Pilih">-</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
              </select>
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
                value="{{ old('nama_wali')}}"
              />
              @error('Nama Wali')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="pendidikan_wali">Pendidikan Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="pendidikan_wali"
                name="pendidikan_wali"
                value="{{ old('pendidikan_wali')}}"
              />
              @error('Pendidikan Wali')
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
                value="{{ old('pekerjaan_wali')}}"
              />
              @error('Pekerjaan Wali')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="penghasilan_wali">Penghasilan Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="penghasilan_wali"
                name="penghasilan_wali"
                value="{{ old('penghasilan_wali')}}"
              />
              @error('Penghasilan Wali')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="no_wali">No HP Wali</label>
              <input
                class="form-control mt-0 mb-2"
                type="text"
                id="no_wali"
                name="no_wali"
                value="{{ old('no_wali')}}"
              />
              @error('No HP Wali')
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
                value="{{ old('alamat_wali')}}"
              />
              @error('Alamat Wali')
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
