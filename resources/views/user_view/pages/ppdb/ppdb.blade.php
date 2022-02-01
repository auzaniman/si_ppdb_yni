@extends('user_view.layouts.app_ppdb')

@section('title')
PPDB Online
@endsection

@section('visi_misi')
Menjadi lembaga pendidikan unggul dan profesional dalam mencetak SDM yang berkarakter, kompetitif dan berwawasan global.
@endsection

@section('content')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <!-- Unit Sekolah -->
  <section class="py-5 mt-5" id="daftar_sekolah">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Daftar Sekolah</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url ('frontend/assets/img/YNI/KBIT/logo.jpeg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" width="200" height="200" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="" class="text-dark font-weight-bold">KBIT Nurul 'Ilmi</a>
              </h5>
              <p>
                Menjadi generasi Islam cerdas dan mandiri.
              </p>
              <a href="{{ route('ppdb_kbit.create') }}" class="text-info text-sm icon-move-right">Daftar Sekarang
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url ('frontend/assets/img/YNI/TKIT1/logo.png')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" width="200" height="200" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="" class="text-dark font-weight-bold">TKIT 1 Nurul 'Ilmi</a>
              </h5>
              <p>
                Menjadi taman bermain dan belajar yang menyenangkan dengan pembiasaan  nilai-nilai islami.
              </p>
              <a href="{{ route('ppdb_tkit1.create')}}" class="text-info text-sm icon-move-right">Daftar Sekarang
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url ('frontend/assets/img/YNI/TKIT2/logo.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" width="200" height="200" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="" class="text-dark font-weight-bold">TKIT 2 Nurul 'Ilmi</a>
              </h5>
              <p>
                Menjadi lembaga pendidikan unggul dan profesional dalam mencetak SDM yang berkarakter, kompetitif dan berwawasan global.
              </p>
              <a href="{{ route('ppdb_tkit2.create') }}" class="text-info text-sm icon-move-right">Daftar Sekarang
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url ('frontend/assets/img/YNI/SDIT/logo.png')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" width="200" height="200" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="" class="text-dark font-weight-bold">SDIT Nurul 'Ilmi</a>
              </h5>
              <p>
                Menjadi sekolah dasar yang terbaik yang menerapkan sistem pendidikan islam terpadu.
              </p>
              <a href="{{ route('ppdb_sdit.create')}}" class="text-info text-sm icon-move-right">Daftar Sekarang
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url ('frontend/assets/img/YNI/SMPIT/logo.png')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" width="200" height="200" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="" class="text-dark font-weight-bold">SMPIT Nurul 'Ilmi</a>
              </h5>
              <p>
                Terwujudnya pribadi yang shaleh dan shalehah, berintelektual tinggi serta peduli lingkungan.
              </p>
              <a href="{{ route('ppdb_smpit.create')}}" class="text-info text-sm icon-move-right">Daftar Sekarang
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url ('frontend/assets/img/YNI/SMAIT/logo.png')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" width="200" height="200" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="https://smait.ynikoetaikartanagara.com" class="text-dark font-weight-bold">SMAIT Nurul 'Ilmi</a>
              </h5>
              <p>
                Menjadi lembaga pendidikan unggul dan profesional dalam mencetak SDM yang berkarakter, kompetitif dan berwawasan global.
              </p>
              <a href="{{ route('ppdb_smait.create')}}" class="text-info text-sm icon-move-right">Daftar Sekarang
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="horizontal dark">

  <!-- Alur Pendaftaran -->
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
                          <div class="col-lg-6 my-auto">
                            <h3 class="mt-5 mt-lg-0">Alur Pendaftaran</h3>
                            <p class="pe-5">Berikut adalah gambaran alur pendaftaran PPDB Online Sekolah Nurul Ilmi.</p>
                          </div>
                          <div class="col-lg-6 mt-lg-0 mt-3 ps-lg-0 ps-0">
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-ship opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0">Daftar Online. <br> Melalui link yang sudah disediakan oleh masing-masing sekolah.</p>
                              </div>
                            </div>

                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-handshake opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0">Mengisi Data Calon Siswa. <br>Melengkapi data calon siswa didalam formulir online.</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0">Transfer Biaya Pendaftaran. <br>Untuk beberapa unit sekolah akan dikenakan biaya pendaftaran.</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0">Tes Wawancara Siswa dan Ortu. <br>Melakukan tes wawancara kepada calon siswa dan orangtua.</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0">Pengumuman. <br>Akan diumumkan melalui masing-masing unit sekolah.</p>
                              </div>
                            </div>
                            <div class="p-3 info-horizontal">
                              <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                <i class="fas fa-hourglass opacity-10"></i>
                              </div>
                              <div class="description ps-3">
                                <p class="mb-0">Daftar Ulang. <br>Bagi siswa yang telah diterima, silahkan melakukan daftar ulang.</p>
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
</div>
@endsection

