@extends('admin_view.layouts.app')

@section('title')
Table Data
@endsection

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">
    DataTables is a third party plugin that is used to generate the
    demo table below. For more information about DataTables
  </p>

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
          class="table table-bordered"
          id="dataTable"
          width="100%"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th>Nama Siswa/Nama Panggilan/Kelamin</th>
              <th>NIK</th>
              <th>TTL</th>
              <th>Alamat</th>
              <th>Agama</th>
              <th>Jenis Tinggal</th>
              <th>Transportasi/Jarak/Waktu ke Sekolah</th>
              <th>Penyakit</th>
              <th>Anak ke/Saudara Kandung/Tiri/Angkat</th>
              <th>Bahasa</th>
              <th>TB/BB/GD</th>
              <th>Hobi</th>
              <th>Cita-Cita</th>
              <th>Sekolah Asal</th>
              <th>Alamat Sekolah Asal</th>
              <th>No KK</th>
              <th>Nama Ayah/NIK/TTL/Pekerjaan/Pendidikan/Tempat Kerja/Penghasilan/No/Alamat</th>
              <th>Nama Ibu/NIK/TTL/Pekerjaan/Pendidikan/Tempat Kerja/Penghasilan/No/Alamat</th>
              <th>Tinggal Bersama Wali</th>
              <th>Nama Wali/Pekerjaan/Pendidikan/Penghasilan/No/Alamat</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($tkit2 as $tk)
            <tr>
              <td>{{ $tk->nama_akta }}/{{ $tk->nama_panggil }}/{{ $tk->jenis_kelamin }}</td>
              <td>{{ $tk->nik_anak }}</td>
              <td>{{ $tk->tt_lahir }}</td>
              <td>{{ $tk->alamat_siswa }}</td>
              <td>{{ $tk->agama }}</td>
              <td>{{ $tk->jenis_tinggal }}</td>
              <td>{{ $tk->transportasi }}/{{ $tk->jarak_tinggal }}/{{ $tk->waktu_tempuh }}</td>
              <td>{{ $tk->penyakit }}</td>
              <td>{{ $tk->anak_ke }}/{{ $tk->jml_saudara_kandung }}/{{ $tk->jml_saudara_tiri }}/{{ $tk->jml_saudara_angkat }}</td>
              <td>{{ $tk->bahasa_sehari }}</td>
              <td>{{ $tk->tb }}/{{ $tk->bb }}/{{ $tk->gd }}</td>
              <td>{{ $tk->hobi }}</td>
              <td>{{ $tk->cita_cita }}</td>
              <td>{{ $tk->sekolah_asal }}</td>
              <td>{{ $tk->alamat_sekolah_asal }}</td>
              <td>{{ $tk->no_kk }}</td>
              <td>{{ $tk->nama_ayah }}/{{ $tk->nik_ayah }}/{{ $tk->ttl_ayah }}/{{ $tk->pekerjaan_ayah }}/{{ $tk->pendidikan_ayah }}/{{ $tk->tempat_kerja_ayah }}/{{ $tk->penghasilan_ayah }}/{{ $tk->no_ayah }}/{{ $tk->alamat_ayah }}</td>
              <td>{{ $tk->nama_ibu }}/{{ $tk->nik_ibu }}/{{ $tk->ttl_ibu }}/{{ $tk->pekerjaan_ibu }}/{{ $tk->pendidikan_ibu }}/{{ $tk->tempat_kerja_ibu }}/{{ $tk->penghasilan_ibu }}/{{ $tk->no_ibu }}/{{ $tk->alamat_ibu }}</td>
              <td>{{ $tk->tinggal_bersama_wali }}</td>
              <td>{{ $tk->nama_wali }}/{{ $tk->pekerjaan_wali }}/{{ $tk->pendidikan_wali }}/{{ $tk->penghasilan_wali }}/{{ $tk->no_wali }}/{{ $tk->alamat_wali }}</td>
              <td>{{ $tk->school->jenjang }}</td>
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
