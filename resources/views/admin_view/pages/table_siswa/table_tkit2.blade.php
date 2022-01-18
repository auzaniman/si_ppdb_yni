@extends('admin_view.layouts.app')

@section('title')
Table Data TKIT 2
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
    <h1 class="h3 text-gray-800">Data Peserta PPDB TKIT 2</h1>
    <a id="downloadLink" class="btn btn-success text-decoration-none" onclick="exportF(this)">Export to excel</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        Pendaftaran TKIT 2 Nurul 'Ilmi
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
              <th colspan="11">Identitas Siswa</th>
              <th colspan="2">No Induk</th>
              <th rowspan="2">Alamat</th>
              <th rowspan="2">Jenis Tinggal</th>
              <th colspan="3">Mobilitas</th>
              <th rowspan="2">Penyakit</th>
              <th colspan="3">Jumlah Saudara</th>
              <th rowspan="2">Bahasa</th>
              <th colspan="2">Sekolah Asal</th>
              <th colspan="9">Identitas Ayah</th>
              <th colspan="9">Identitas Ibu</th>
              <th rowspan="2">Tinggal Bersama Wali</th>
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
              <th>Cita-cita</th>
              <th>NIK</th>
              <th>KK</th>
              <th>Transportasi</th>
              <th>Jarak Tempuh</th>
              <th>Waktu Tempuh</th>
              <th>Kandung</th>
              <th>Tiri</th>
              <th>Angkat</th>
              <th>Asal</th>
              <th>Alamat</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>TTL</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Tempat Kerja</th>
              <th>Penghasilan</th>
              <th>No HP</th>
              <th>Alamat</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>TTL</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Tempat Kerja</th>
              <th>Penghasilan</th>
              <th>No HP</th>
              <th>Alamat</th>
              <th>Nama</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Penghasilan</th>
              <th>No HP</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($tkit2 as $tk)
            <tr>
              <td>{{ $tk->nama_akta }}</td>
              <td>{{ $tk->nama_panggil }}</td>
              <td>{{ $tk->jenis_kelamin }}</td>
              <td>{{ $tk->tt_lahir }}</td>
              <td>{{ $tk->agama }}</td>
              <td>{{ $tk->tb }}</td>
              <td>{{ $tk->bb }}</td>
              <td>{{ $tk->gd }}</td>
              <td>{{ $tk->anak_ke }}</td>
              <td>{{ $tk->hobi }}</td>
              <td>{{ $tk->cita_cita }}</td>
              <td>{{ $tk->nik_anak }}</td>
              <td>{{ $tk->no_kk }}</td>
              <td>{{ $tk->alamat_siswa }}</td>
              <td>{{ $tk->jenis_tinggal }}</td>
              <td>{{ $tk->transportasi }}</td>
              <td>{{ $tk->jarak_tinggal }}</td>
              <td>{{ $tk->waktu_tempuh }}</td>
              <td>{{ $tk->penyakit }}</td>
              <td>{{ $tk->jml_saudara_kandung }}</td>
              <td>{{ $tk->jml_saudara_tiri }}</td>
              <td>{{ $tk->jml_saudara_angkat }}</td>
              <td>{{ $tk->bahasa_sehari }}</td>
              <td>{{ $tk->sekolah_asal }}</td>
              <td>{{ $tk->alamat_sekolah_asal }}</td>
              <td>{{ $tk->nama_ayah }}</td>
              <td>{{ $tk->nik_ayah }}</td>
              <td>{{ $tk->ttl_ayah }}</td>
              <td>{{ $tk->pendidikan_ayah }}</td>
              <td>{{ $tk->pekerjaan_ayah }}</td>
              <td>{{ $tk->tempat_kerja_ayah }}</td>
              <td>{{ $tk->penghasilan_ayah }}</td>
              <td>{{ $tk->no_ayah }}</td>
              <td>{{ $tk->alamat_ayah }}</td>
              <td>{{ $tk->nama_ibu }}</td>
              <td>{{ $tk->nik_ibu }}</td>
              <td>{{ $tk->ttl_ibu }}</td>
              <td>{{ $tk->pendidikan_ibu }}</td>
              <td>{{ $tk->pekerjaan_ibu }}</td>
              <td>{{ $tk->tempat_kerja_ibu }}</td>
              <td>{{ $tk->penghasilan_ibu }}</td>
              <td>{{ $tk->no_ibu }}</td>
              <td>{{ $tk->alamat_ibu }}</td>
              <td>{{ $tk->tinggal_bersama_wali }}</td>
              <td>{{ $tk->nama_wali }}</td>
              <td>{{ $tk->pendidikan_wali }}</td>
              <td>{{ $tk->pekerjaan_wali }}</td>
              <td>{{ $tk->penghasilan_wali }}</td>
              <td>{{ $tk->no_wali }}</td>
              <td>{{ $tk->alamat_wali }}</td>
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
