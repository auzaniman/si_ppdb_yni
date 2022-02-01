<section class="py-sm-7" id="download-soft-ui">
  <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
    <img src="{{ url('frontend/material_kit/assets/img/shapes/waves-white.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
    <div class="container py-7 postion-relative z-index-2 position-relative">
      <div class="row">
        <div class="col-md-7 mx-auto text-center">
          <h3 class="text-white mb-0">Jadi Bagian Keluarga Nurul 'Ilmi</h3>
          <h3 class="text-white">@yield('unit')</h3>
          <p class="text-white mb-5">Ayo buat akun terlebih dahulu untuk melanjutkan mendaftar</p>
          <button class="btn btn-primary btn-lg mb-3 mb-sm-0" onclick="event.preventDefault(); location.href='{{ url('register')}}';">Buat Akun</button>
        </div>
      </div>
    </div>
  </div>
</section>
