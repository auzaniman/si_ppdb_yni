@extends('user_view.layouts.app_ppdb')

@section('title')
Formulir PPDB Online SDIT Nurul 'Ilmi
@endsection

@section('unit')
SDIT Nurul 'Ilmi Tenggarong
@endsection

@section('visi_misi')
Menjadi sekolah dasar yang terbaik yang menerapkan sistem pendidikan islam terpadu.
@endsection

@section('content')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

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
                              <li class="pe-5">Pas Foto 2 Lembar</li>
                              <li class="pe-5">Fotokopi Kartu keluarga</li>
                              <li class="pe-5">Fotokopi akta kelahiran</li>
                              <li class="pe-5">Fotokopi KTP Orangtua (salah satu) 1 lembar</li>
                              <li class="pe-5">Membayar biaya pendaftaran Rp. 200.000. Transfer ke Rekening BSI 7033521736 a.n. SDIT Nurul Ilmi Tenggarong </li>
                              <li class="pe-5">Usia minimal 6 tahun pada tanggal 1 juli 2022</li>
                            </ul>
                          </div>
                          <div class="col-lg-6 mt-lg-0 mt-3 ps-lg-0 ps-0">
                            <h3>Time Line Pendaftaran</h3>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-ship opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0"><strong>Pendaftaran Online Gelombang 1</strong> <br> 17 Januari 2022 - 17 Februari 2022</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-ship opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0"><strong>Pendaftaran Online Gelombang 2</strong> <br> 7 Februari 2022 - 12 Februari 2022</p>
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
  <section class="form-pendaftaran">

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
                        <span class="text-sm opacity-8">085225937390 (Ust. Aulia Rahman)</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">08146590397 (Ust. Bahrul)</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">081319158894 (Ust. Wasian)</span>
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
                <form action="{{ route('ppdb_sdit.store')}}" class="p-3" id="contact-form" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-header px-4 py-sm-5 py-3">
                    <h2>Pendaftaran untuk SDIT Nurul 'Ilmi Tenggarong</h2>
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
                          <label for="nama">Nama Lengkap (Sesuai Akta Lahir)</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nama"
                            name="nama"
                            value="{{ old('nama')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nama_panggilan">Nama Panggilan</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nama_panggilan"
                            name="nama_panggilan"
                            value="{{ old('nama_panggilan')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="jk">Jenis Kelamin</label>
                          <input
                            class="form-control"
                            type="text"
                            id="jk"
                            name="jk"
                            value="{{ old('jk')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="nik">NIK Siswa</label>
                          <input
                            class="form-control"
                            type="text"
                            id="nik"
                            name="nik"
                            value="{{ old('nik') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="akta">No. Registrasi Akta Kelahiran</label>
                          <input
                            class="form-control"
                            type="text"
                            id="akta"
                            name="akta"
                            value="{{ old('No. Akta') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="tl">Tempat Lahir</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tl"
                            name="tl"
                            value="{{ old('Tempat Lahir') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="ttl">Tanggal Lahir</label>
                          <input
                            class="form-control"
                            type="text"
                            id="ttl"
                            name="ttl"
                            value="{{ old('ttl') }}"
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
                          <label for="alamat">Alamat Siswa</label>
                          <input
                            class="form-control"
                            type="text"
                            id="alamat"
                            name="alamat"
                            value="{{ old('alamat')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="transport">Transportasi ke Sekolah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="transport"
                            name="transport"
                            value="{{ old('transport')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="j_tinggal">Jenis Tinggal</label>
                          <input
                            class="form-control"
                            type="text"
                            id="j_tinggal"
                            name="j_tinggal"
                            value="{{ old('j_tinggal') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="jarak">Jarak Tempat Tinggal Ke Sekolah (m/km)</label>
                          <input
                            class="form-control"
                            type="text"
                            id="jarak"
                            name="jarak"
                            value="{{ old('jarak') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="waktu">Waktu Tempuh Ke Sekolah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="waktu"
                            name="waktu"
                            value="{{ old('waktu') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="penyakit">Penyakit yang pernah diderita</label>
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
                          <label for="hp_ortu">No HP Ortu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="hp_ortu"
                            name="hp_ortu"
                            value="{{ old('hp_ortu') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="e_mail">Email</label>
                          <input
                            class="form-control"
                            type="text"
                            id="e_mail"
                            name="e_mail"
                            value="{{ old('e_mail') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="kip">No. KIP (Kartu Indonesia Pintar)</label>
                          <input
                            class="form-control"
                            type="text"
                            id="kip"
                            name="kip"
                            value="{{ old('kip') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="anak">Anak ke Berapa</label>
                          <input
                            class="form-control"
                            type="text"
                            id="anak"
                            name="anak"
                            value="{{ old('anak')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="saudara">Jumlah Saudara Kandung</label>
                          <input
                            class="form-control"
                            type="text"
                            id="saudara"
                            name="saudara"
                            value="{{ old('saudara')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="tiri">Jumlah Saudara Tiri</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tiri"
                            name="tiri"
                            value="{{ old('tiri')}}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="angkat">Jumlah Saudara Angkat</label>
                          <input
                            class="form-control"
                            type="text"
                            id="angkat"
                            name="angkat"
                            value="{{ old('angkat') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="bahasa">Bahasa Sehari-hari dirumah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="bahasa"
                            name="bahasa"
                            value="{{ old('bahasa') }}"
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
                          <label for="asal_sekolah">Asal Sekolah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="asal_sekolah"
                            name="asal_sekolah"
                            value="{{ old('asal_sekolah') }}"
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="alamat_asal">Alamat Asal Sekolah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="alamat_asal"
                            name="alamat_asal"
                            value="{{ old('alamat_asal') }}"
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
                          <label for="p_ayah">Pendidikan Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="p_ayah"
                            name="p_ayah"
                            value="{{ old('p_ayah')}}"
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
                          <label for="tk_ayah">Tempat Kerja Ayah</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tk_ayah"
                            name="tk_ayah"
                            value="{{ old('tk_ayah')}}"
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
                          <label for="p_ibu">Pendidikan Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="p_ibu"
                            name="p_ibu"
                            value="{{ old('p_ibu')}}"
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
                          <label for="tk_ibu">Tempat Kerja Ibu</label>
                          <input
                            class="form-control"
                            type="text"
                            id="tk_ibu"
                            name="tk_ibu"
                            value="{{ old('tk_ibu')}}"
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
                          <label for="alamat_ortu">Alamat Rumah Orangtua</label>
                          <input
                            class="form-control"
                            type="text"
                            id="alamat_ortu"
                            name="alamat_ortu"
                            value="{{ old('alamat_ortu') }}"
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
                          <label for="p_wali">Pendidikan Wali</label>
                          <input
                            class="form-control"
                            type="text"
                            id="p_wali"
                            name="p_wali"
                            value="{{ old('p_wali')}}"
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
                          <label for="hp_wali">No HP Wali</label>
                          <input
                            class="form-control"
                            type="text"
                            id="hp_wali"
                            name="hp_wali"
                            value="{{ old('hp_wali')}}"
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
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="image_pembayaran">Upload Bukti Pembayaran </label>
                          <input
                            class="form-control"
                            type="file"
                            id="image_pembayaran"
                            name="image_pembayaran"
                            value=""
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="image_kk">Upload KK</label>
                          <input
                            class="form-control"
                            type="file"
                            id="image_kk"
                            name="image_kk"
                            value=""
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="image_ktp">Upload KTP Orangtua</label>
                          <input
                            class="form-control"
                            type="file"
                            id="image_ktp"
                            name="image_ktp"
                            value=""
                          />
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label for="image_akta">Upload Akta Kelahiran</label>
                          <input
                            class="form-control"
                            type="file"
                            id="image_akta"
                            name="image_akta"
                            value=""
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
