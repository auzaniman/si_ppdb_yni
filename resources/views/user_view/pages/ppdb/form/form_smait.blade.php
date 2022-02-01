@extends('user_view.layouts.app_ppdb')

@section('title')
  Formulir PPDB Online SMAIT Nurul 'Ilmi
@endsection

@section('unit')
  SMAIT Nurul 'Ilmi Tenggarong
@endsection

@section('visi_misi')
  Menjadi lembaga pendidikan unggul dan profesional dalam mencetak SDM yang berkarakter, kompetitif dan berwawasan global.
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
<section class="py-6">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 py-3">
        <h3>Persyaratan Daftar Ulang</h3>
        <ul>
          <li class="pe-5">Menunjukkan Kuitansi/Bukti Pembayaran/Nomor Registrasi</li>
          <li class="pe-5">Pas Foto Warna</li>
          <li class="pe-5">Fotokopi Raport</li>
          <li class="pe-5">Fotokopi Kartu Keluarga</li>
          <li class="pe-5">Fotokopi Piagam</li>
          <li class="pe-5">Fotokopi Ijazah</li>
          <li class="pe-5">Biaya Pendaftaran</li>
        </ul>
      </div>
      <div class="col-lg-6 mt-lg-0 mt-3 ps-lg-0 ps-0">
        <div class="p-3 info-horizontal">
          <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
            <i class="fas fa-ship opacity-10"></i>
          </div>
          <div class="description ps-3">
            <p class="mb-0"><strong>Pendaftaran Online Gelombang 1</strong> <br> 2 Januari 2022 - 23 April 2022</p>
          </div>
        </div>
        <div class="p-3 info-horizontal">
          <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
            <i class="fas fa-ship opacity-10"></i>
          </div>
          <div class="description ps-3">
            <p class="mb-0"><strong>Pendaftaran Online Gelombang 2</strong> <br> 31 Mei 2022 - 23 Juli 2022</p>
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
</section>
{{-- End Timeline --}}

{{-- Posdig --}}
<section>
  <div class="container">
    <img src="{{ url('frontend/assets/img/YNI/SMAIT/posdig.jpeg') }}" alt="Poster Digital" class="img-fluid">
  </div>
</section>

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
                      <span class="text-sm opacity-8">-</span>
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
              <form action="{{ route('ppdb_smait.store')}}" class="p-3" id="contact-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header px-4 py-sm-5 py-3">
                  <h2>Pendaftaran untuk SMAIT Nurul 'Ilmi Tenggarong</h2>
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
                        <label for="nama">Nama Siswa</label>
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
                        <label for="ttl">TTL</label>
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
                        <label for="alamat">Alamat</label>
                        <input
                          class="form-control"
                          type="text"
                          id="alamat"
                          name="alamat"
                          value="{{ old('alamat') }}"
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
                        <label for="nik">NIK</label>
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
                        <label for="kk">No KK</label>
                        <input
                          class="form-control"
                          type="text"
                          id="kk"
                          name="kk"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="input-group input-group-static mb-4">
                        <label for="nisn">NISN</label>
                        <input
                          class="form-control"
                          type="text"
                          id="nisn"
                          name="nisn"
                          value="{{ old('nisn') }}"
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
                          value="{{ old('nama_ayah') }}"
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
                          value="{{ old('nik_ayah') }}"
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
                        <label for="ukuran_baju">Ukuran Baju</label>
                        <input
                          class="form-control"
                          type="text"
                          id="ukuran_baju"
                          name="ukuran_baju"
                          value="{{ old('ukuran_baju') }}"
                        />
                      </div>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="input-group input-group-static mb-4">
                        <label for="hp_siswa">No HP Siswa</label>
                        <input
                          class="form-control"
                          type="text"
                          id="hp_siswa"
                          name="hp_siswa"
                          value="{{ old('hp_siswa') }}"
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
                        <label for="image">Upload KK</label>
                        <input
                          class="form-control"
                          type="file"
                          id="image"
                          name="image"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="input-group input-group-static mb-4">
                        <label for="stay">Pilihan Tinggal</label>
                        <select name="stay" class="form-control">
                          <option data-display="Pilih">-</option>
                          <option value="Reguler">Reguler</option>
                          <option value="Boarding">Boarding</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="input-group input-group-static mb-4">
                        <label for="department">Pilihan Jurusan</label>
                        <select name="department" class="form-control">
                          <option data-display="Pilih">-</option>
                          <option value="IPA">IPA</option>
                          <option value="IPS">IPS</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="input-group input-group-static mb-4">
                        <label for="program">Pilihan Program</label>
                        <select name="program" class="form-control">
                          <option data-display="Pilih">-</option>
                          <option value="Reguler">Reguler</option>
                          <option value="Tahfidz">Tahfidz</option>
                        </select>
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
