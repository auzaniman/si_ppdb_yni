@extends('admin_view.layouts.app')

@section('title')
Table Data TKIT 1
@endsection

@section('content')
<div class="container-fluid">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
      function exportF(elem) {
          var table = document.getElementById("dataTable");
          var html = table.outerHTML;
          var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url
          elem.setAttribute("href", url);
          elem.setAttribute("download", "Data Peserta.xls"); // Choose the file name
          return false;
      }
  </script>
  <h5 class="alert alert-info">Mohon Tunggu Hingga Data Muncul di Semua Field, Kemudian Klik Export to Excel</h5>

  <!-- Page Heading -->
  <div class="row justify-content-between mx-0 mb-4">
    <h1 class="h3 text-gray-800">Data Peserta PPDB TKIT 1</h1>
    <a id="downloadLink" class="btn btn-success text-decoration-none" onclick="exportF(this)">Export to excel</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        Pendaftaran TKIT 1 Nurul 'Ilmi
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table
          class="table table-bordered text-center"
          id="dataTable"
          width="100%"
          border="1"
          align="center"
          cellspacing="0"
          cellpadding="5"
        >
          <thead>
            <tr>
              <th colspan="6">Identitas Siswa</th>
              <th colspan="2">No Induk</th>
              <th rowspan="2">Alamat</th>
              <th colspan="2">Mobilitas</th>
              <th rowspan="2">No HP</th>
              <th rowspan="2">Lingkar Kepala</th>
              <th rowspan="2">Jumlah Saudara</th>
              <th colspan="5">Identitas Ayah</th>
              <th colspan="5">Identitas Ibu</th>
              <th rowspan="2">Status</th>
            </tr>
            <tr>
              <th>Nama</th>
              <th>Panggilan</th>
              <th>Kelamin</th>
              <th>TTL</th>
              <th>TB</th>
              <th>BB</th>
              <th>NIK</th>
              <th>Akta</th>
              <th>Transportasi</th>
              <th>Jarak dan Waktu Tempuh</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Penghasilan</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Penghasilan</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($tkit1 as $tkit)
            <tr>
              <td>{{ $tkit->nama }}//</td>
              <td>{{ $tkit->nama_panggilan }}</td>
              <td>{{ $tkit->kelamin }}</td>
              <td>{{ $tkit->ttl }}</td>
              <td>{{ $tkit->tb }}</td>
              <td>{{ $tkit->tb }}</td>
              <td>{{ $tkit->nik }}</td>
              <td>{{ $tkit->no_akta }}</td>
              <td>{{ $tkit->alamat }}</td>
              <td>{{ $tkit->trans_sekolah }}</td>
              <td>{{ $tkit->jarak_waktu }}</td>
              <td>{{ $tkit->hp_ortu }}</td>
              <td>{{ $tkit->lingkar_kepala }}</td>
              <td>{{ $tkit->jumlah_saudara }}</td>
              <td>{{ $tkit->nama_ayah }}</td>
              <td>{{ $tkit->ttl_ayah }}</td>
              <td>{{ $tkit->pendidikan_ayah }}</td>
              <td>{{ $tkit->pekerjaan_ayah }}</td>
              <td>{{ $tkit->penghasilan_ayah }}</td>
              <td>{{ $tkit->nama_ibu }}</td>
              <td>{{ $tkit->ttl_ibu }}</td>
              <td>{{ $tkit->pendidikan_ibu }}</td>
              <td>{{ $tkit->pekerjaan_ibu }}</td>
              <td>{{ $tkit->penghasilan_ibu }}</td>
              <td></td>
            </tr>
            @empty

            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
