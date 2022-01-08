@extends('user_view.layouts.app_ppdb_checkout')

@section('title')
Sukses Mendaftar
@endsection

@section('content')
<section
  class="h-100 w-100 pt-5 mt-5 checkout"
>
  <div class="empty-3-1" style="font-family: 'Poppins', sans-serif">
    <div
      class="
        mx-auto
        d-flex
        align-items-center
        justify-content-center
        flex-column
      "
    >
      <img
        class="main-img"
        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-3.png"
        alt=""
      />
      <div class="text-center w-100">
        <h1 class="title-text">Pendaftaran Berhasil</h1>
        <p class="caption-text">
          Silahkan Hubungi Admin Sekolah<br
            class="d-sm-block d-none"
          />
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
