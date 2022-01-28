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
      <table class="mb-3">
        <tbody class="table text-center" cellpadding="5" style="vertical-align: middle">
          <th colspan="2">
            <img width="100" height="100" src="{{ url ('frontend/assets/img/YNI/SMPIT/logo.png')}}" alt="logo SMPIT">
          </th>
          <th colspan="4">
            <h4 class="ms-lg-5 ps-lg-5" >KARTU BUKTI PENDAFTARAN CALON SISWA/SISWI BARU <br>
            SEKOLAH ISLAM TERPADU NURUL 'ILMI TENGGARONG <br>
          SMPIT TAHUN 2021/2022</h4>
          </th>
        </tbody>
      </table>
      <table border="1" cellpadding="5" class="table table-bordered mb-3">
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
      <div class="card">
        <div class="card-body">
          <table class="table" cellpadding="5">
            <th class="border-0">
              <ul class="list-unstyled ms-3 mb-0">
                <li class="mb-3">
                  Jadwal penerimaan siswa baru
                </li>
                <li class="mb-3">Pendaftaran <br>
                  15 Januari 2021 - 27 Februari
                </li>
                <li class="mb-3">Ujian <br>
                  03 Maret 2021 - 06 Maret
                </li>
                <li class="mb-3">Wawancara Orangtua <br>
                  04 Maret 2021 - 06 Maret
                </li>
                <li>Pengumuman <br>
                  13 Maret 2021 - 30 Maret
                </li>
              </ul>
            </th>
            <th>
              <img width="100" height="100" src="{{ asset('storage/'.$smp->image) }}" alt="pasfoto">
            </th>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
