<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSMPITRequest;
use App\Models\School;
use App\Models\SMPIT;
use Illuminate\Http\Request;

class SMPITController extends Controller
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
      $smpit = SMPIT::all();
      $schools = School::all();

      return view('user_view.pages.ppdb.form_smpit', [
        'smpit' => $smpit,
        'schools' => $schools,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSMPITRequest $request)
    {
      $smpit = new SMPIT();

      $smpit->school_id = $request->school_id;
      $smpit->stay = $request->stay;
      $smpit->program = $request->program;
      $smpit->nama = $request->nama;
      $smpit->ttl = $request->ttl;
      $smpit->alamat = $request->alamat;
      $smpit->asal_sekolah = $request->asal_sekolah;
      $smpit->nisn = $request->nisn;
      $smpit->nik = $request->nik;
      $smpit->kk = $request->kk;
      $smpit->nama_ayah = $request->nama_ayah;
      $smpit->nik_ayah = $request->nik_ayah;
      $smpit->nama_ibu = $request->nama_ibu;
      $smpit->nik_ibu = $request->nik_ibu;
      $smpit->pekerjaan_ayah = $request->pekerjaan_ayah;
      $smpit->pekerjaan_ibu = $request->pekerjaan_ibu;
      $smpit->ukuran_baju = $request->ukuran_baju;
      $smpit->hp_ortu = $request->hp_ortu;
      $smpit->hp_siswa = $request->hp_siswa;
      $smpit->image = $request->image;
      $smpit['image'] = $request->file('image')->store('', 'public');

      $smpit->save();

      return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
