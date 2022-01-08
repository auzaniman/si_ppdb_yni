@extends('user_view.layouts.app_ppdb_checkout')

@section('title')
List Pendaftar
@endsection

@section('content')
<section>
  <div class="container mt-5">
    <h3>Silahkan Cetak Kartu Peserta</h3>

    <div class="table-responsive">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td>Nama</td>
            <td>{{ $smp->nama }}</td>
          </tr>
          <tr>
            <td>Program</td>
            <td>{{ $smp->program }}</td>
          </tr>
          <tr>
            <td>Asal Sekolah</td>
            <td>{{ $smp->asal_sekolah }}</td>
          </tr>
          <tr>
            <td>NIK</td>
            <td>{{ $smp->nik }}</td>
          </tr>
          <tr>
            <td>NISN</td>
            <td>{{ $smp->nisn }}</td>
          </tr>
          <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>{{ $smp->ttl }}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>{{ $smp->alamat }}</td>
          </tr>
          <tr>
            <td>Nama Ayah</td>
            <td>{{ $smp->nama_ayah }}</td>
          </tr>
          <tr>
            <td>Nama Ibu</td>
            <td>{{ $smp->nama_ibu }}</td>
          </tr>
          <tr>
            <td>Nama Wali</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Kontak</td>
            <td>{{ $smp->hp_siswa }}/{{ $smp->hp_ortu }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection
