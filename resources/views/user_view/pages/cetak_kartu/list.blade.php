@extends('user_view.layouts.app_ppdb_checkout')

@section('title')
List Pendaftar
@endsection

@section('content')
<div class="container mt-5">
  <h3>Cari Nama Ananda Pendaftar Lalu Klik Lihat Kartu</h3>

  <div class="table-responsive">
    <table class="table table-bordered" width="100%" id="example">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($smpit as $smp)
        <tr>
          <td>{{ $smp->nama }}</td>
          <td>
            <button class="badge bg-success border-0">
              <a href="{{ route('ppdb_smpit.show', $smp->id) }}" class="text-reset text-decoration-none">Lihat Kartu</a>
            </button>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="7" class="text-center">
            Data Kosong
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
