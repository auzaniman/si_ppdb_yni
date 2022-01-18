@extends('admin_view.layouts.app')

@section('title')
Table Data SMPIT
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
    <h1 class="h3 text-gray-800">Data Peserta PPDB SMPIT</h1>
    <a id="downloadLink" class="btn btn-success text-decoration-none" onclick="exportF(this)">Export to excel</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        Pendaftaran SMPIT Nurul 'Ilmi
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table
          class="table table-bordered"
          id="dataTable"
          width="100%"
          border="1"
          cellspacing="0"
          cellpadding="5"
          align="center"
        >
          <thead class="text-center">
            <tr>
              <th rowspan="2">Nama Siswa</th>
              <th rowspan="2">TTL</th>
              <th colspan="3">No Induk</th>
              <th rowspan="2">Asal Sekolah</th>
              <th rowspan="2">Alamat Tinggal</th>
              <th colspan="3">Identitas Ayah</th>
              <th colspan="3">Identitsan Ibu</th>
              <th colspan="2">Nomor HP</th>
              <th rowspan="2">Program</th>
              <th rowspan="2">Pas Poto</th>
              <th rowspan="2">Bukti Pembayaran</th>
              <th rowspan="2">Status</th>
            </tr>
            <tr>
              <th>NIK</th>
              <th>NISN</th>
              <th>KK</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>Pekerjaan</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>Pekerjaan</th>
              <th>Siswa</th>
              <th>Ortu</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($smpit as $smp)
            <tr>
              <td>{{ $smp->nama }}</td>
              <td>{{ $smp->ttl }}</td>
              <td>{{ $smp->nik }}</td>
              <td>{{ $smp->nisn }}</td>
              <td>{{ $smp->kk }}</td>
              <td>{{ $smp->asal_sekolah }}</td>
              <td>{{ $smp->alamat }}</td>
              <td>{{ $smp->nama_ayah }}</td>
              <td>{{ $smp->nik_ayah }}</td>
              <td>{{ $smp->pekerjaan_ayah }}</td>
              <td>{{ $smp->nama_ibu }}</td>
              <td>{{ $smp->nik_ibu }}</td>
              <td>{{ $smp->pekerjaan_ibu }}</td>
              <td>{{ $smp->hp_siswa }}</td>
              <td>{{ $smp->hp_ortu }}</td>
              <td>{{ $smp->program }}</td>
              <td>
                <img src="{{ asset('storage/'.$smp->image) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
              <td>
                <img src="{{ asset('storage/'.$smp->image_bukti) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
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
