<?php

namespace App\Http\Controllers;

use App\Models\SMAIT;
use App\Models\School;
use App\Http\Requests\StoreSMAITRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SMAITController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $smait = SMAIT::all();
      $schools = School::all();

      return view('user_view.pages.ppdb.form.form_smait', [
        'smait' => $smait,
        'schools' => $schools,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSMAITRequest $request)
    {
      $smait = new SMAIT();

      $smait->school_id = $request->school_id;
      $smait->stay = $request->stay;
      $smait->department = $request->department;
      $smait->program = $request->program;
      $smait->nama = $request->nama;
      $smait->ttl = $request->ttl;
      $smait->alamat = $request->alamat;
      $smait->asal_sekolah = $request->asal_sekolah;
      $smait->nisn = $request->nisn;
      $smait->nik = $request->nik;
      $smait->kk = $request->kk;
      $smait->nama_ayah = $request->nama_ayah;
      $smait->nik_ayah = $request->nik_ayah;
      $smait->nama_ibu = $request->nama_ibu;
      $smait->nik_ibu = $request->nik_ibu;
      $smait->pekerjaan_ayah = $request->pekerjaan_ayah;
      $smait->pekerjaan_ibu = $request->pekerjaan_ibu;
      $smait->ukuran_baju = $request->ukuran_baju;
      $smait->hp_ortu = $request->hp_ortu;
      $smait->hp_siswa = $request->hp_siswa;
      $smait->image = $request->image;
      $smait['image'] = $request->file('image')->store('', 'public');

      $smait->save();

      return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SMAIT  $smait
     * @return \Illuminate\Http\Response
     */
    public function show(SMAIT $smait)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SMAIT  $smait
     * @return \Illuminate\Http\Response
     */
    public function edit(SMAIT $smait)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SMAIT  $smait
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SMAIT $smait)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SMAIT  $smait
     * @return \Illuminate\Http\Response
     */
    public function destroy(SMAIT $smait)
    {
        //
    }
}
