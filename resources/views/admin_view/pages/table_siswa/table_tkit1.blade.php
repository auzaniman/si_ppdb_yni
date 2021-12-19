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
        Pendaftaran TKIT 1 Nurul 'Ilmi
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

            @forelse ($tkit1 as $tkit)
            <tr>
              <td>{{ $tkit->nama }}/{{ $tkit->nama_panggilan }}/{{ $tkit->kelamin }}</td>
              <td>{{ $tkit->nik }}</td>
              <td>{{ $tkit->alamat }}</td>
              <td>{{ $tkit->trans_sekolah }}/{{ $tkit->jarak_waktu }}</td>
              <td>{{ $tkit->no_akta }}</td>
              <td>{{ $tkit->hp_ortu }}</td>
              <td>{{ $tkit->tb }}/{{ $tkit->bb }}</td>
              <td>{{ $tkit->lingkar_kepala }}</td>
              <td>{{ $tkit->jumlah_saudara }}</td>
              <td>{{ $tkit->nama_ayah }}/{{ $tkit->ttl_ayah }}/{{ $tkit->pekerjaan_ayah }}/{{ $tkit->pendidikan_ayah }}/{{ $tkit->penghasilan_ayah }}</td>
              <td>{{ $tkit->nama_ibu }}/{{ $tkit->ttl_ibu }}/{{ $tkit->pekerjaan_ibu }}/{{ $tkit->pendidikan_ibu }}/{{ $tkit->penghasilan_ibu }}</td>
              <td>{{ $tkit->school->jenjang }}</td>
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
