@extends('user_view.layouts.app_yayasan')

@section('title')
Yayasan Nurul 'Ilmi
@endsection

@section('content')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <!-- Unit Sekolah -->
  <section class="py-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <div class="row mt-4">
            <div class="col-md-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/TKIT1/5.jpg')}}" alt="aboutus">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">KBIT Nurul 'Ilmi Tenggarong</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-0 mt-5">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/TKIT1/3.jpg')}}" alt="contacus">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">TKIT 1 Nurul 'Ilmi Tenggarong</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/TKIT2/4.jpg')}}" alt="signin">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">TKIT 2 Nurul 'Ilmi Tenggarong</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/SDIT/10.jpeg')}}" alt="author">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">SDIT Nurul 'Ilmi Tenggarong</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/SMPIT/4.jpg')}}" alt="author">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">SMPIT Nurul 'Ilmi Tenggarong</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/SMAIT/1.jpeg')}}" alt="author">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">SMAIT Nurul 'Ilmi Tenggarong</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mx-auto mt-md-0 mt-5">
          <div class="position-sticky" style="top:100px !important">
            <h4 class="">Unit Sekolah Yayasan Nurul 'Ilmi</h4>
            <h6 class="text-secondary font-weight-normal">Menjadi lembaga pendidikan unggul dan profesional dalam mencetak SDM Islami yang berkarakter, kompetitif dan berwawasan global</h6>
          </div>
        </div>
      </div>
  </section>

  <!-- Benefit -->
  <section class="my-5 py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
          <div class="rotating-card-container">
            <div class="card card-rotate card-background card-background-mask-success shadow-primary mt-md-0 mt-5">
              <div class="front front-background" style="background-image: url(frontend/assets/img/YNI/SMAIT/1.jpeg); background-size: cover;">
                <div class="card-body py-7 text-center">
                  <i class="material-icons text-white text-4xl my-3">touch_app</i>
                  <h3 class="text-white">Jelajahi <br /> Yayasan Nurul 'Ilmi</h3>
                  <p class="text-white opacity-8">Mengenal program dan bidang yayasan dalam pengembangan didunia pendidikan.</p>
                </div>
              </div>
              <div class="back back-background" style="background-image: url(frontend/assets/img/YNI/SMAIT/2.jpeg); background-size: cover;">
                <div class="card-body pt-7 text-center">
                  <h3 class="text-white">Jelajahi YNI</h3>
                  <p class="text-white opacity-8">Mengenal program dan bidang yayasan dalam pengembangan didunia pendidikan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-success text-3xl">content_copy</i>
                <h5 class="font-weight-bolder mt-3">Pendidikan</h5>
                <p class="pe-5">Berkomitmen mengimplementasikan sistem pendidikan Islam secara terpadu untuk melahirkan generasi muslim terbaik menuju terwujudnya kejayaan Islam.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-success text-3xl">flip_to_front</i>
                <h5 class="font-weight-bolder mt-3">Ekonomi</h5>
                <p class="pe-3">-.</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-5">
            <div class="col-md-6 mt-3">
              <i class="material-icons text-gradient text-success text-3xl">price_change</i>
              <h5 class="font-weight-bolder mt-3">Mitra</h5>
              <p class="pe-5">-.</p>
            </div>
            <div class="col-md-6 mt-3">
              <div class="info">
                <i class="material-icons text-gradient text-success text-3xl">devices</i>
                <h5 class="font-weight-bolder mt-3">Program</h5>
                <p class="pe-3">-.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Prakata Guru -->
  <section class="pb-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">Dewan Pembina Yayasan Nurul 'Ilmi</h3>
          <p class="text-white opacity-8 mb-0">Pesan-pesan dewan pembina kami.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/YNI/dewan2.jpeg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">H.M.  Ali Hamdi, ZA, S.Ag.</h5>
                  <h6 class="text-info">Ketua Dewan Pembina</h6>
                  <p class="mb-0">Pesan-pesan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/YNI/dewan.jpeg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">DR. H. Saiful Aduar, M.Pd</h5>
                  <h6 class="text-info">Anggota Dewan Pembina</h6>
                  <p class="mb-0">Pesan-pesan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Pembina</h5>
                  <h6 class="text-info">-</h6>
                  <p class="mb-0">-.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Pembina</h5>
                  <h6 class="text-info">-</h6>
                  <p class="mb-0">-.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Artikel -->
  <section class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Informasi Berita YNI</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/testimonial-6-2.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Kabar Berita 1</a>
              </h5>
              <p>
                -
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/testimonial-6-2.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Kabar Berita 2</a>
              </h5>
              <p>
                -
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/blog-9-4.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Kabar Berita 3</a>
              </h5>
              <p>
                -
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background cursor-pointer">
            <div class="full-background" style="background-image: url('frontend/material_kit/assets/img/examples/blog2.jpg')" loading="lazy"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <h2 class="card-title text-white">Kabar Berita 4</h2>
                <p class="card-description text-white">-.</p>
                <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                  <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  {{-- <section class="py-sm-4" id="download-soft-ui">
    <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
      <img src="{{ url('frontend/material_kit/assets/img/shapes/waves-white.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
      <div class="container py-7 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <h3 class="text-white mb-0">Yayasan Nurul 'Ilmi</h3>
            <h3 class="text-white"></h3>
            <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
            <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-primary btn-lg mb-3 mb-sm-0">Buat Akun</a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- Support Section --}}
  {{-- <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-12 my-auto">
          <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
          <h3>Want more?</h3>
          <p class="pe-md-5 mb-4">
            Most complex and innovative Design System Made by <a href="https://creative-tim.com/" target="_blank">Creative Tim </a> . Check our latest Premium Bootstrap 5 UI Kit.

            Designed for those who like bold elements and beautiful websites. Made of hundred of elements, designed blocks and fully coded pages, Material Kit is ready to help you create stunning websites and webapps.
          </p>
        </div>
        <div class="col-md-5 col-12 my-auto">
          <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
            <img class="w-100 border-radius-lg shadow-lg" src="https://s3.amazonaws.com/creativetim_bucket/products/46/original/material-kit-pro.jpg?1632843641" alt="Product Image">
          </a>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- Input --}}
  <section>
    <div class="container py-4">
      <div class="row">
        <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
          <h3 class="text-center">Kontak Informasi</h3>
          <form role="form" id="contact-form" method="post" autocomplete="off">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Nama Lengkap</label>
                    <input class="form-control" aria-label="Nama LEngkap..." type="text" >
                  </div>
                </div>
                <div class="col-md-6 ps-2">
                  <div class="input-group input-group-dynamic">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" placeholder="" aria-label="Nomor HP..." >
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="input-group input-group-dynamic">
                  <label class="form-label">Alamat Email</label>
                  <input type="email" class="form-control">
                </div>
              </div>
              <div class="input-group mb-4 input-group-static">
                <label>Pesan, Saran dan Masukan</label>
                <textarea name="message" class="form-control" id="message" rows="4"></textarea>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Sosmed Section -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-auto">
          <h4 class="mb-1">Jazaakumullah Khairan!</h4>
          <p class="lead mb-0">Kami memberi pelayanan pendidikan terbaik</p>
        </div>
        <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
          <a href="" class="btn btn-youtube mb-0 me-2" target="_blank">
            <i class="fab fa-youtube me-1"></i> Watch
          </a>
          <a href="" class="btn btn-facebook mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1"></i> Share
          </a>
          <a href="" class="btn btn-instagram mb-0 me-2" target="_blank">
            <i class="fab fa-instagram me-1"></i> Post it
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

