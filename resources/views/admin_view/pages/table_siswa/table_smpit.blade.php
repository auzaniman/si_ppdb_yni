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
        Pendaftaran SMAIT Nurul 'Ilmi
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
              <th>Nama Siswa</th>
              <th>NIK/NISN</th>
              <th>Asal Sekolah</th>
              <th>Alamat</th>
              <th>Nama Ayah/Pekerjaan/NIK</th>
              <th>Nama Ibu/Pekerjaan/NIK</th>
              <th>HP Siswa/Ortu</th>
              <th>Tinggal/Program</th>
              <th>File</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($smpit as $smp)
            <tr>
              <td>{{ $smp->nama }}</td>
              <td>{{ $smp->nik }}/{{ $smp->nisn }}/{{ $smp->kk }}</td>
              <td>{{ $smp->asal_sekolah }}</td>
              <td>{{ $smp->alamat }}</td>
              <td>{{ $smp->nama_ayah }}/{{ $smp->pekerjaan_ayah }}/{{ $smp->nik_ayah }}</td>
              <td>{{ $smp->nama_ibu }}/{{ $smp->pekerjaan_ibu }}/{{ $smp->nik_ibu }}</td>
              <td>{{ $smp->hp_siswa }}/{{ $smp->hp_ortu }}</td>
              <td>{{ $smp->stay }}-{{ $smp->program }}</td>
              <td>
                <img src="{{ asset('storage/assets/ppdb/'.$smp->image) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
              <td>{{ $smp->school->jenjang }}</td>
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
