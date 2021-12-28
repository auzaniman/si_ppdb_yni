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
        Pendaftaran KBIT Nurul 'Ilmi
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
              <th>NIK/No Akta</th>
              <th>TTL</th>
              <th>Agama</th>
              <th>Alamat</th>
              <th>Jenis Tinggal</th>
              <th>Transportasi/Jarak/Waktu ke Sekolah</th>
              <th>Penyakit</th>
              <th>Anak ke/Saudara Kandung/Tiri/Angkat</th>
              <th>Bahasa</th>
              <th>TB/BB/GD</th>
              <th>Hobi</th>
              <th>Nama Ayah/NIK/TTL/Pekerjaan/Pendidikan/Tempat Kerja/Penghasilan/No</th>
              <th>Nama Ibu/NIK/TTL/Pekerjaan/Pendidikan/Tempat Kerja/Penghasilan/No</th>
              <th>Alamat Ortu</th>
              <th>Nama Wali/Pekerjaan/Pendidikan/Penghasilan/No/Alamat</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($kbit as $kb)
            <tr>
              <td>{{ $kb->nama_akta }}/{{ $kb->nama_panggil }}/{{ $kb->jenis_kelamin }}</td>
              <td>{{ $kb->nik_anak }}/{{ $kb->no_akta }}</td>
              <td>{{ $kb->tt_lahir }}</td>
              <td>{{ $kb->agama }}</td>
              <td>{{ $kb->alamat_siswa }}</td>
              <td>{{ $kb->jenis_tinggal }}</td>
              <td>{{ $kb->transportasi }}/{{ $kb->jarak_tinggal }}/{{ $kb->waktu_tempuh }}</td>
              <td>{{ $kb->penyakit }}</td>
              <td>{{ $kb->anak_ke }}/{{ $kb->jml_saudara_kandung }}/{{ $kb->jml_saudara_tiri }}/{{ $kb->jml_saudara_angkat }}</td>
              <td>{{ $kb->bahasa_sehari }}</td>
              <td>{{ $kb->tb }}/{{ $kb->bb }}/{{ $kb->gd }}</td>
              <td>{{ $kb->hobi }}</td>
              <td>{{ $kb->nama_ayah }}/{{ $kb->nik_ayah }}/{{ $kb->ttl_ayah }}/{{ $kb->pekerjaan_ayah }}/{{ $kb->pendidikan_ayah }}/{{ $kb->tempat_kerja_ayah }}/{{ $kb->penghasilan_ayah }}/{{ $kb->no_ayah }}</td>
              <td>{{ $kb->nama_ibu }}/{{ $kb->nik_ibu }}/{{ $kb->ttl_ibu }}/{{ $kb->pekerjaan_ibu }}/{{ $kb->pendidikan_ibu }}/{{ $kb->tempat_kerja_ibu }}/{{ $kb->penghasilan_ibu }}/{{ $kb->no_ibu }}</td>
              <td>{{ $kb->alamat_ortu }}</td>
              <td>{{ $kb->nama_wali }}/{{ $kb->pekerjaan_wali }}/{{ $kb->pendidikan_wali }}/{{ $kb->penghasilan_wali }}/{{ $kb->no_wali }}/{{ $kb->alamat_wali }}</td>
              <td>{{ $kb->school->jenjang }}</td>
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
