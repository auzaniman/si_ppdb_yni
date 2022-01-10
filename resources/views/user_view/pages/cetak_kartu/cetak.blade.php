@extends('user_view.layouts.app_ppdb_checkout')

@section('title')
List Pendaftar
@endsection

@section('content')


<section>
  <div class="container mt-5">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
      function exportF(elem) {
          var table = document.getElementById("cetak");
          var html = table.outerHTML;
          var url = 'data:application/vnd.ms-word,' + escape(html); // Set your html table into url
          elem.setAttribute("href", url);
          elem.setAttribute("download", "Kartu Peserta.doc"); // Choose the file name
          return false;
      }
  </script>

  <h5 class="alert alert-info">Mohon Tunggu Hingga Data Muncul di Semua Field, Kemudian Klik Unduh ke Word</h5>

  <div class="mx-0 mb-5">
    <h3>Silahkan Cetak Kartu Peserta</h3>
    <a id="downloadLink" class="btn btn-primary text-decoration-none" onclick="exportF(this)">Unduh ke Word</a>
  </div>

    <div class="table-responsive" id="cetak">
      <div class="row mb-3">
        <div class="col-3 text-center">
          <img width="100" height="100" class="img-fluid" src="{{ url ('frontend/assets/img/YNI/SMPIT/logo.png')}}" alt="logo SMPIT">
        </div>
        <div class="col-6 text-center">
          <h4>KARTU BUKTI PENDAFTARAN CALON SISWA/SISWI BARU <br>
          SEKOLAH ISLAM TERPADU NURUL 'ILMI TENGGARONG <br>
        SMPIT TAHUN 2021/2022</h4>
        </div>
        <div class="col-3">
          <h4>Keterangan</h4>
        </div>
      </div>
      <table border="1" cellpadding="5" class="table table-bordered">
        <tbody>
          <tr>
            <td>Nama</td>
            <td>{{ $smp->nama }}</td>
          </tr>
          <tr>
            <td>Program</td>
            <td>{{ $smp->program }}</td>
          </tr>
          <tr>
            <td>Asal Sekolah</td>
            <td>{{ $smp->asal_sekolah }}</td>
          </tr>
          <tr>
            <td>NIK</td>
            <td>{{ $smp->nik }}</td>
          </tr>
          <tr>
            <td>NISN</td>
            <td>{{ $smp->nisn }}</td>
          </tr>
          <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>{{ $smp->ttl }}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>{{ $smp->alamat }}</td>
          </tr>
          <tr>
            <td>Nama Ayah</td>
            <td>{{ $smp->nama_ayah }}</td>
          </tr>
          <tr>
            <td>Nama Ibu</td>
            <td>{{ $smp->nama_ibu }}</td>
          </tr>
          <tr>
            <td>Nama Wali</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Kontak</td>
            <td>{{ $smp->hp_siswa }}/{{ $smp->hp_ortu }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection
