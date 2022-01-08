@extends('user_view.layouts.app_ppdb_checkout')

@section('title')
List Pendaftar
@endsection

@section('content')
<div class="table-responsive">
  <table class="table table-striped table-bordered" width="100%" id="example">
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
        <td><a href="{{ route('ppdb_smpit.show', $smp->id) }}" class="badge badge-info">Lihat Kartu</a>
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
@endsection
