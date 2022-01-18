@extends('admin_view.layouts.app')

@section('title')
Table Data SDIT
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
    <h1 class="h3 text-gray-800">Data Peserta PPDB SDIT</h1>
    <a id="downloadLink" class="btn btn-success text-decoration-none" onclick="exportF(this)">Export to excel</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        Pendaftaran SDIT Nurul 'Ilmi
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
              <th colspan="9">Identitas Siswa</th>
              <th colspan="3">No Induk</th>
              <th colspan="2">Sekolah Asal</th>
              <th colspan="3">Alamat</th>
              <th colspan="4">Mobilitas</th>
              <th rowspan="2">Penyakit</th>
              <th colspan="3">Jumlah Saudara</th>
              <th colspan="7">Identitas Ayah</th>
              <th colspan="7">Identitas Ibu</th>
              <th colspan="4">Identitas Wali</th>
              <th colspan="3">Info Kontak</th>
              <th rowspan="2">Bahasa</th>
              <th rowspan="2">Bukti Pembayaran</th>
              <th rowspan="2">KK</th>
              <th rowspan="2">KTP</th>
              <th rowspan="2">Akta</th>
              <th rowspan="2">Status</th>
            </tr>
            <tr>
              <th>Nama</th>
              <th>Panggilan</th>
              <th>Kelamin</th>
              <th>Agama</th>
              <th>TL, TTL</th>
              <th>BB</th>
              <th>TB</th>
              <th>GD</th>
              <th>Anak ke</th>
              <th>NIK</th>
              <th>Akta</th>
              <th>KIP</th>
              <th>Asal</th>
              <th>Alamat</th>
              <th>Siswa</th>
              <th>Ortu</th>
              <th>Wali</th>
              <th>Transportasi</th>
              <th>Jenis Tinggal</th>
              <th>Jarak Tempuh</th>
              <th>Waktu Tempuh</th>
              <th>Kandung</th>
              <th>Tiri</th>
              <th>Angkat</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>NIK</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Tempat Kerja</th>
              <th>Penghasilan</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>NIK</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Tempat Kerja</th>
              <th>Penghasilan</th>
              <th>Nama</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Penghasilan</th>
              <th>Email</th>
              <th>HP Ortu</th>
              <th>HP Wali</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($sdit as $sd)
            <tr>
              <td>{{ $sd->nama }}</td>
              <td>{{ $sd->nama_panggilan }}</td>
              <td>{{ $sd->jk }}</td>
              <td>{{ $sd->agama }}</td>
              <td>{{ $sd->tl }}, {{ $sd->ttl }}</td>
              <td>{{ $sd->bb }}</td>
              <td>{{ $sd->tb }}</td>
              <td>{{ $sd->gd }}</td>
              <td>{{ $sd->anak }}</td>
              <td>{{ $sd->nik }}</td>
              <td>{{ $sd->akta }}</td>
              <td>{{ $sd->kip }}</td>
              <td>{{ $sd->asal_sekolah }}</td>
              <td>{{ $sd->alamat_asal }}</td>
              <td>{{ $sd->alamat }}</td>
              <td>{{ $sd->alamat_ortu }}</td>
              <td>{{ $sd->alamat_wali }}</td>
              <td>{{ $sd->transport }}</td>
              <td>{{ $sd->j_tinggal }}</td>
              <td>{{ $sd->jarak }}</td>
              <td>{{ $sd->waktu }}</td>
              <td>{{ $sd->penyakit }}</td>
              <td>{{ $sd->saudara }}</td>
              <td>{{ $sd->tiri }}</td>
              <td>{{ $sd->angkat }}</td>
              <td>{{ $sd->nama_ayah }}</td>
              <td>{{ $sd->ttl_ayah }}</td>
              <td>{{ $sd->nik_ayah }}</td>
              <td>{{ $sd->p_ayah }}</td>
              <td>{{ $sd->pekerjaan_ayah }}</td>
              <td>{{ $sd->tk_ayah }}</td>
              <td>{{ $sd->penghasilan_ayah }}</td>
              <td>{{ $sd->nama_ibu }}</td>
              <td>{{ $sd->ttl_ibu }}</td>
              <td>{{ $sd->nik_ibu }}</td>
              <td>{{ $sd->p_ibu }}</td>
              <td>{{ $sd->pekerjaan_ibu }}</td>
              <td>{{ $sd->tk_ibu }}</td>
              <td>{{ $sd->penghasilan_ibu }}</td>
              <td>{{ $sd->nama_wali }}</td>
              <td>{{ $sd->p_wali }}</td>
              <td>{{ $sd->pekerjaan_wali }}</td>
              <td>{{ $sd->penghasilan_wali }}</td>
              <td>{{ $sd->e_mail }}</td>
              <td>{{ $sd->hp_ortu }}</td>
              <td>{{ $sd->hp_wali }}</td>
              <td>{{ $sd->bahasa }}</td>
               <td>
                <img src="{{ asset('storage/'.$sd->image_pembayaran) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
              <td>
                <img src="{{ asset('storage/'.$sd->image_kk) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
              <td>
                <img src="{{ asset('storage/'.$sd->image_ktp) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
              <td>
                <img src="{{ asset('storage/'.$sd->image_akta) }}" alt="" style="width: 150px" class="img-thumbnail">
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
