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
              <th>Nama Siswa/Panggilan/Kelamin/Agama</th>
              <th>NIK/Akta/KIP</th>
              <th>TL/TTL</th>
              <th>Asal Sekolah/Alamat Asal</th>
              <th>Alamat Siswa/Alamat Ortu/Alamat Wali</th>
              <th>Transport/Tinggal/Jarak/Waktu</th>
              <th>Penyakit</th>
              <th>BB/TB/GD</th>
              <th>Anak ke/Saudara/Tiri/Angkat</th>
              <th>Nama Ayah/TTL/NIK/Pendidikan/Pekerjaan/Tempat/Penghasilan</th>
              <th>Nama Ibu/TTL/NIK/Pendidikan/Pekerjaan/Tempat/Penghasilan</th>
              <th>Nama Wali/Pendidikan/Pekerjaan/Penghasilan</th>
              <th>Email/HP Ortu/HP Wali</th>
              <th>Bahasa</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            @forelse ($sdit as $sd)
            <tr>
              <td>{{ $sd->nama }}/{{ $sd->nama_panggilan }}/{{ $sd->jk }}/{{ $sd->agama }}</td>
              <td>{{ $sd->nik }}/{{ $sd->akta }}/{{ $sd->kip }}</td>
              <td>{{ $sd->tl }}/{{ $sd->ttl }}</td>
              <td>{{ $sd->asal_sekolah }}/{{ $sd->alamat_asal }}</td>
              <td>{{ $sd->alamat }}/{{ $sd->alamat_ortu }}/{{ $sd->alamat_wali }}</td>
              <td>{{ $sd->transport }}/{{ $sd->j_tinggal }}/{{ $sd->jarak }}/{{ $sd->waktu }}</td>
              <td>{{ $sd->penyakit }}</td>
              <td>{{ $sd->bb }}/{{ $sd->tb }}/{{ $sd->gd }}</td>
              <td>{{ $sd->anak }}-{{ $sd->saudara }}-{{ $sd->tiri }}/{{ $sd->angkat }}</td>
              <td>{{ $sd->nama_ayah }}/{{ $sd->ttl_ayah }}/{{ $sd->p_ayah }}/{{ $sd->pekerjaan_ayah }}/{{ $sd->tk_ayah }}/{{ $sd->penghasilan_ayah }}</td>
              <td>{{ $sd->nama_ibu }}/{{ $sd->ttl_ibu }}/{{ $sd->p_ibu }}/{{ $sd->pekerjaan_ibu }}/{{ $sd->tk_ibu }}/{{ $sd->penghasilan_ibu }}</td>
              <td>{{ $sd->nama_wali }}/{{ $sd->p_wali }}/{{ $sd->pekerjaan_wali }}/{{ $sd->penghasilan_wali }}</td>
              <td>{{ $sd->e_mail }}/{{ $sd->hp_ortu }}/{{ $sd->hp_wali }}</td>
              <td>{{ $sd->bahasa }}</td>
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
