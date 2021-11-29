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
              <th>Status</th>
              <th>Jurusan & Program</th>
              <th>Status</th>
              <th>Jurusan & Program</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($students as $student)
            <tr>
              <td>{{ $student->nama }}</td>
              <td>{{ $student->nik }}/{{ $student->nisn }}</td>
              <td>{{ $student->asal_sekolah }}</td>
              <td>{{ $student->alamat }}</td>
              <td>{{ $student->nama_ayah }}/{{ $student->pekerjaan_ayah }}</td>
              <td>{{ $student->nama_ibu }}/{{ $student->pekerjaan_ibu }}</td>
              <td>{{ $student->hp_siswa }}/{{ $student->hp_ortu }}</td>
              <td>{{ $student->department->pilihan_jurusan }}-{{ $student->stay->pilihan_tinggal }}-{{ $student->program->pilihan_program }}</td>
              <td>{{ $student->school->jenjang }}</td>
            </tr>
            @empty

            @endforelse
          </tbody>
          {{-- <!-- Modal -->
          <div class="modal fade" id="modalDetails" tabindex="-1" aria-labelledby="modalDetailsLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalDetailsLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal END --> --}}
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
