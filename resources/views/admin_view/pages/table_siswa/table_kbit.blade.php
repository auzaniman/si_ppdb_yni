@extends('admin_view.layouts.app')

@section('title')
Table Data KBIT
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
    <h1 class="h3 text-gray-800">Data Peserta PPDB KBIT</h1>
    <a id="downloadLink" class="btn btn-success text-decoration-none" onclick="exportF(this)">Export to excel</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        Pendaftaran KBIT Nurul 'Ilmi
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
              <th colspan="10">Identitas Siswa</th>
              <th colspan="2">No Induk</th>
              <th rowspan="2">Alamat</th>
              <th rowspan="2">Jenis Tinggal</th>
              <th colspan="3">Mobilitas</th>
              <th rowspan="2">Penyakit</th>
              <th colspan="3">Jumlah Saudara</th>
              <th rowspan="2">Bahasa</th>
              <th colspan="8">Identitas Ayah</th>
              <th colspan="8">Identitas Ibu</th>
              <th rowspan="2">Alamat Ortu</th>
              <th colspan="6">Identitas Wali</th>
              <th rowspan="2">Status</th>
            </tr>
            <tr>
              <th>Nama</th>
              <th>Panggilan</th>
              <th>Kelamin</th>
              <th>TTL</th>
              <th>Agama</th>
              <th>TB</th>
              <th>BB</th>
              <th>GD</th>
              <th>Anak ke</th>
              <th>Hobi</th>
              <th>NIK</th>
              <th>No Akta</th>
              <th>Transportasi</th>
              <th>Jarak Tempuh</th>
              <th>Waktu Tempuh</th>
              <th>Kandung</th>
              <th>Tiri</th>
              <th>Angkat</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>TTL</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Tempat Kerja</th>
              <th>Penghasilan</th>
              <th>No HP</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>TTL</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Tempat Kerja</th>
              <th>Penghasilan</th>
              <th>No HP</th>
              <th>Nama</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Penghasilan</th>
              <th>No HP</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($kbit as $kb)
            <tr>
              <td>{{ $kb->nama_akta }}</td>
              <td>{{ $kb->nama_panggil }}</td>
              <td>{{ $kb->jenis_kelamin }}</td>
              <td>{{ $kb->tt_lahir }}</td>
              <td>{{ $kb->agama }}</td>
              <td>{{ $kb->tb }}</td>
              <td>{{ $kb->bb }}</td>
              <td>{{ $kb->gd }}</td>
              <td>{{ $kb->anak_ke }}</td>
              <td>{{ $kb->hobi }}</td>
              <td>{{ $kb->nik_anak }}</td>
              <td>{{ $kb->no_akta }}</td>
              <td>{{ $kb->alamat_siswa }}</td>
              <td>{{ $kb->jenis_tinggal }}</td>
              <td>{{ $kb->transportasi }}</td>
              <td>{{ $kb->jarak_tinggal }}</td>
              <td>{{ $kb->waktu_tempuh }}</td>
              <td>{{ $kb->penyakit }}</td>
              <td>{{ $kb->jml_saudara_kandung }}</td>
              <td>{{ $kb->jml_saudara_tiri }}</td>
              <td>{{ $kb->jml_saudara_angkat }}</td>
              <td>{{ $kb->bahasa_sehari }}</td>
              <td>{{ $kb->nama_ayah }}</td>
              <td>{{ $kb->nik_ayah }}</td>
              <td>{{ $kb->ttl_ayah }}</td>
              <td>{{ $kb->pendidikan_ayah }}</td>
              <td>{{ $kb->pekerjaan_ayah }}</td>
              <td>{{ $kb->tempat_kerja_ayah }}</td>
              <td>{{ $kb->penghasilan_ayah }}</td>
              <td>{{ $kb->no_ayah }}</td>
              <td>{{ $kb->nama_ibu }}</td>
              <td>{{ $kb->nik_ibu }}</td>
              <td>{{ $kb->ttl_ibu }}</td>
              <td>{{ $kb->pendidikan_ibu }}</td>
              <td>{{ $kb->pekerjaan_ibu }}</td>
              <td>{{ $kb->tempat_kerja_ibu }}</td>
              <td>{{ $kb->penghasilan_ibu }}</td>
              <td>{{ $kb->no_ibu }}</td>
              <td>{{ $kb->alamat_ortu }}</td>
              <td>{{ $kb->nama_wali }}</td>
              <td>{{ $kb->pendidikan_wali }}</td>
              <td>{{ $kb->pekerjaan_wali }}</td>
              <td>{{ $kb->penghasilan_wali }}</td>
              <td>{{ $kb->no_wali }}</td>
              <td>{{ $kb->alamat_wali }}</td>
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
