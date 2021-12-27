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
              <th>Alamat</th>
              <th>Transportasi/Jarak dan Waktu ke Sekolah</th>
              <th>No Akta</th>
              <th>No HP</th>
              <th>TB/BB</th>
              <th>Lingkar Kepala</th>
              <th>Jumlah Saudara</th>
              <th>Nama Ayah/TTL Ayah/Pekerjaan Ayah/Pendidikan Ayah/Penghasilan Ayah</th>
              <th>Nama Ibu/TTL Ibu/Pekerjaan Ibu/Pendidikan Ibu/Penghasilan Ibu</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($tkit2 as $tk)
            <tr>
              <td>{{ $tk->nama_akta }}/{{ $tk->nama_panggil }}/{{ $tk->jenis_kelamin }}</td>
              <td>{{ $tk->nik_anak }}</td>
              <td>{{ $tk->alamat_siswa }}</td>
              <td>{{ $tk->agama }}</td>
              <td>{{ $tk->jenis_tinggal }}</td>
              <td>{{ $tk->transportasi }}/{{ $tk->jarak_tinggal }}/{{ $tk->waktu_tempuh }}</td>
              <td>{{ $tk->no_akta }}</td>
              <td>{{ $tk->hp_ortu }}</td>
              <td>{{ $tk->tb }}/{{ $tk->bb }}</td>
              <td>{{ $tk->lingkar_kepala }}</td>
              <td>{{ $tk->jumlah_saudara }}</td>
              <td>{{ $tk->nama_ayah }}/{{ $tk->ttl_ayah }}/{{ $tk->pekerjaan_ayah }}/{{ $tk->pendidikan_ayah }}/{{ $tk->penghasilan_ayah }}</td>
              <td>{{ $tk->nama_ibu }}/{{ $tk->ttl_ibu }}/{{ $tk->pekerjaan_ibu }}/{{ $tk->pendidikan_ibu }}/{{ $tk->penghasilan_ibu }}</td>
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
