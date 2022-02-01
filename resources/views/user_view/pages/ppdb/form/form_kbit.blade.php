@extends('user_view.layouts.app_ppdb')

@section('title')
Formulir PPDB Online KBIT Nurul 'Ilmi
@endsection

@section('unit')
KBIT Nurul 'Ilmi Tenggarong
@endsection

@section('visi_misi')
Menjadi generasi Islam cerdas dan mandiri.
@endsection

@section('content')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

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
  <section class="py-2">
    <div class="container mt-sm-5 mt-3">
      <div class="row">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Informasi Pendaftaran</h3>
            <h6 class="text-secondary font-weight-normal pe-3">Informasi seputar pendaftaran sekolah Nurul 'Ilmi</h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <!-- Features -->
            <div class="col-12">
              <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                <div class="container border-bottom">
                  <div class="row justify-space-between py-2">
                    <div class="col-lg-3 me-auto">
                      <p class="lead text-dark pt-1 mb-0">Yayasan Nurul 'Ilmi</p>
                    </div>
                    <div class="col-lg-3"></div>
                  </div>
                </div>
                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="preview-features-1">
                    <iframe width="100%" height="600px" srcdoc='<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
                      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
                      <!-- Material Icons -->
                      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
                      <link id="pagestyle" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=3.0.0" rel="stylesheet" />
                      <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6 my-auto ps-lg-0 ps-0">
                            <h3 class="mt-4 mt-lg-0">Persyaratan Daftar Ulang</h3>
                            <ul>
                              <li class="pe-5">Fotokopi Kartu Keluarga (1 Lembar)</li>
                              <li class="pe-5">Fotokopi Akta Kelahiran (1 Lembar)</li>
                            </ul>
                          </div>
                          <div class="col-lg-6 mt-lg-0 mt-3 ps-lg-0 ps-0">
                            <h3>Time Line Pendaftaran</h3>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-ship opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0"><strong>Pendaftaran Online</strong> <br> 1 Februari 2022</p>
                              </div>
                            </div>

                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-handshake opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0"><strong>Pengumuman</strong> <br> -</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0"><strong>Daftar Ulang</strong> <br> -</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

                      '>
                    </iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- End Timeline --}}

  <hr class="horizontal dark">

  <!-- FORM PENDAFTARAN -->
  @guest
  @include('user_view.includes.call_to_action')
  @endguest

  @auth
  <section class="py-lg-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card box-shadow-xl overflow-hidden mb-5">
            <div class="row">
              <div class="col-lg-5 position-relative bg-cover bg-dark px-0" style="background-image: url('frontend/material_kit/assets/img/examples/blog2.jpg')" loading="lazy">
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                  <div class="mask bg-gradient-dark opacity-8"></div>
                  <div class="p-6 ps-sm-6 position-relative text-start z-index-2">
                    <h3 class="text-white">Kontak Informasi</h3>
                    <p class="text-white opacity-8 mb-4">Silahkan hubungi untuk informasi lebih lanjut.</p>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">085246339779</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-envelope text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">-</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-map-marker-alt text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">Jl. Ahmad Dahlan RT 12, Keluharan Baru, Tenggarong, Kab. Kutai Kartanegara</span>
                      </div>
                    </div>
                    <div class="mt-4">
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                        <i class="fab fa-facebook"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <form action="{{ route('ppdb_kbit.store')}}" class="p-3" id="contact-form" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header px-4 py-sm-5 py-3">
                    <h2>Pendaftaran untuk KBIT Nurul 'Ilmi Tenggarong</h2>
                    <p class="lead"> Silahkan isi formulir pendaftaran.</p>
                  </div>
                  <div class="card-body pt-1">
                    <div class="row">
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="school_id">Pilihan Sekolah</label>
                          <select name="school_id" class="form-control">
                            <option data-display="Pilih">-</option>
                            @foreach ($schools as $school)
                            <option value="{{ $school->id }}">
                            {{ $school->jenjang }}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nama_akta">Nama Siswa</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nama_akta"
                            name="nama_akta"
                            value="{{ old('nama_akta')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nama_panggil">Nama Panggilan</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nama_panggil"
                            name="nama_panggil"
                            value="{{ old('nama_panggil')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <input
                            class="form-control"
                            type="text"
                            id="jenis_kelamin"
                            name="jenis_kelamin"
                            value="{{ old('jenis_kelamin')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nik_anak">NIK Siswa</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nik_anak"
                            name="nik_anak"
                            value="{{ old('nik_anak')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="no_akta">No Akta</label>
                          <input
                            class="form-control"
                            type="text"
                            id="no_akta"
                            name="no_akta"
                            value="{{ old('no_akta')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="tt_lahir">TTL</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tt_lahir"
                            name="tt_lahir"
                            value="{{ old('tt_lahir')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="agama">Agama</label>
                          <input
                            class="form-control"
                            type="text"
                            id="agama"
                            name="agama"
                            value="{{ old('agama')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="alamat_siswa">Alamat Siswa</label>
                          <input
                            class="form-control"
                            type="text"
                            id="alamat_siswa"
                            name="alamat_siswa"
                            value="{{ old('alamat_siswa')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="transportasi">Transportasi ke Sekolah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="transportasi"
                            name="transportasi"
                            value="{{ old('transportasi')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="jenis_tinggal">Jenis Tinggal</label>
                          <select name="jenis_tinggal" class="form-control">
                            <option data-display="Pilih">-</option>
                            <option value="Rumah Sendiri">Rumah Sendiri</option>
                            <option value="Sewa">Sewa</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="jarak_tinggal">Jarak Tinggal (Km)</label>
                          <input
                            class="form-control"
                            type="text"
                            id="jarak_tinggal"
                            name="jarak_tinggal"
                            value="{{ old('jarak_tinggal')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="waktu_tempuh">Waktu Tempuh (menit/jam)</label>
                          <input
                            class="form-control"
                            type="text"
                            id="waktu_tempuh"
                            name="waktu_tempuh"
                            value="{{ old('waktu_tempuh')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="penyakit">Penyakit</label>
                          <input
                            class="form-control"
                            type="text"
                            id="penyakit"
                            name="penyakit"
                            value="{{ old('penyakit')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="anak_ke">Anak ke Berapa</label>
                          <input
                            class="form-control"
                            type="text"
                            id="anak_ke"
                            name="anak_ke"
                            value="{{ old('anak_ke')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="jml_saudara_kandung">Jumlah Saudara Kandung</label>
                          <input
                            class="form-control"
                            type="text"
                            id="jml_saudara_kandung"
                            name="jml_saudara_kandung"
                            value="{{ old('jml_saudara_kandung')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="jml_saudara_tiri">Jumlah Saudara Tiri</label>
                          <input
                            class="form-control"
                            type="text"
                            id="jml_saudara_tiri"
                            name="jml_saudara_tiri"
                            value="{{ old('jml_saudara_tiri')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="bahasa_sehari">Bahasa Sehari-hari</label>
                          <input
                            class="form-control"
                            type="text"
                            id="bahasa_sehari"
                            name="bahasa_sehari"
                            value="{{ old('bahasa_sehari')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="tb">Tinggi Badan</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tb"
                            name="tb"
                            value="{{ old('tb')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="bb">Berat Badan</label>
                          <input
                            class="form-control"
                            type="text"
                            id="bb"
                            name="bb"
                            value="{{ old('bb')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="gd">Golongan Darah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="gd"
                            name="gd"
                            value="{{ old('gd')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="hobi">Hobi</label>
                          <input
                            class="form-control"
                            type="text"
                            id="hobi"
                            name="hobi"
                            value="{{ old('hobi')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nama_ayah">Nama Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nama_ayah"
                            name="nama_ayah"
                            value="{{ old('nama_ayah')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nik_ayah">NIK Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nik_ayah"
                            name="nik_ayah"
                            value="{{ old('nik_ayah')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="ttl_ayah">TTL Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="ttl_ayah"
                            name="ttl_ayah"
                            value="{{ old('ttl_ayah')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="pendidikan_ayah">Pendidikan Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="pendidikan_ayah"
                            name="pendidikan_ayah"
                            value="{{ old('pendidikan_ayah')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="pekerjaan_ayah"
                            name="pekerjaan_ayah"
                            value="{{ old('pekerjaan_ayah')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="tempat_kerja_ayah">Tempat Kerja Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tempat_kerja_ayah"
                            name="tempat_kerja_ayah"
                            value="{{ old('tempat_kerja_ayah')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="penghasilan_ayah">Penghasilan Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="penghasilan_ayah"
                            name="penghasilan_ayah"
                            value="{{ old('penghasilan_ayah')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="no_ayah">No HP Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="no_ayah"
                            name="no_ayah"
                            value="{{ old('no_ayah')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nama_ibu">Nama Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nama_ibu"
                            name="nama_ibu"
                            value="{{ old('nama_ibu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nik_ibu">NIK Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nik_ibu"
                            name="nik_ibu"
                            value="{{ old('nik_ibu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="ttl_ibu">TTL Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="ttl_ibu"
                            name="ttl_ibu"
                            value="{{ old('ttl_ibu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="pendidikan_ibu">Pendidikan Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="pendidikan_ibu"
                            name="pendidikan_ibu"
                            value="{{ old('pendidikan_ibu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="pekerjaan_ibu"
                            name="pekerjaan_ibu"
                            value="{{ old('pekerjaan_ibu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="tempat_kerja_ibu">Tempat Kerja Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tempat_kerja_ibu"
                            name="tempat_kerja_ibu"
                            value="{{ old('tempat_kerja_ibu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="penghasilan_ibu">Penghasilan Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="penghasilan_ibu"
                            name="penghasilan_ibu"
                            value="{{ old('penghasilan_ibu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="no_ibu">No HP Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="no_ibu"
                            name="no_ibu"
                            value="{{ old('no_ibu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="alamat_ortu">Alamat Ortu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="alamat_ortu"
                            name="alamat_ortu"
                            value="{{ old('alamat_ortu')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nama_wali">Nama Wali</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nama_wali"
                            name="nama_wali"
                            value="{{ old('nama_wali')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="pendidikan_wali">Pendidikan Wali</label>
                          <input
                            class="form-control"
                            type="text"
                            id="pendidikan_wali"
                            name="pendidikan_wali"
                            value="{{ old('pendidikan_wali')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="pekerjaan_wali">Pekerjaan Wali</label>
                          <input
                            class="form-control"
                            type="text"
                            id="pekerjaan_wali"
                            name="pekerjaan_wali"
                            value="{{ old('pekerjaan_wali')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="penghasilan_wali">Penghasilan Wali</label>
                          <input
                            class="form-control"
                            type="text"
                            id="penghasilan_wali"
                            name="penghasilan_wali"
                            value="{{ old('penghasilan_wali')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="no_wali">No HP Wali</label>
                          <input
                            class="form-control"
                            type="text"
                            id="no_wali"
                            name="no_wali"
                            value="{{ old('no_wali')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="alamat_wali">Alamat Wali</label>
                          <input
                            class="form-control"
                            type="text"
                            id="alamat_wali"
                            name="alamat_wali"
                            value="{{ old('alamat_wali')}}"
                          />
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6 text-end ms-auto">
                        <button type="submit" class="btn bg-gradient-info mb-0">Kirim</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endauth
  </section>
  <!-- FORM PENDAFTARAN END -->
</div>
@endsection
