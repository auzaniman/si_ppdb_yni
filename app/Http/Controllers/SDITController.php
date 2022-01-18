<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\SDIT;
use App\Http\Requests\StoreSDITRequest;
use Illuminate\Http\Request;

class SDITController extends Controller
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
      $sdit = SDIT::all();
      $schools = School::all();

      return view('user_view.pages.ppdb.form_sdit', [
        'sdit' => $sdit,
        'schools' => $schools,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSDITRequest $request)
    {
      $sdit = new SDIT();

      $sdit->school_id = $request->school_id;
      $sdit->nama = $request->nama;
      $sdit->nama_panggilan = $request->nama_panggilan;
      $sdit->jk = $request->jk;
      $sdit->nik = $request->nik;
      $sdit->akta = $request->akta;
      $sdit->tl = $request->tl;
      $sdit->ttl = $request->ttl;
      $sdit->agama = $request->agama;
      $sdit->alamat = $request->alamat;
      $sdit->transport = $request->transport;
      $sdit->j_tinggal = $request->j_tinggal;
      $sdit->jarak = $request->jarak;
      $sdit->waktu = $request->waktu;
      $sdit->penyakit = $request->penyakit;
      $sdit->hp_ortu = $request->hp_ortu;
      $sdit->e_mail = $request->e_mail;
      $sdit->kip = $request->kip;
      $sdit->anak = $request->anak;
      $sdit->saudara = $request->saudara;
      $sdit->tiri = $request->tiri;
      $sdit->angkat = $request->angkat;
      $sdit->bahasa = $request->bahasa;
      $sdit->bb = $request->bb;
      $sdit->tb = $request->tb;
      $sdit->gd = $request->gd;
      $sdit->asal_sekolah = $request->asal_sekolah;
      $sdit->alamat_asal = $request->alamat_asal;
      $sdit->nama_ayah = $request->nama_ayah;
      $sdit->nik_ayah = $request->nik_ayah;
      $sdit->ttl_ayah = $request->ttl_ayah;
      $sdit->p_ayah = $request->p_ayah;
      $sdit->pekerjaan_ayah = $request->pekerjaan_ayah;
      $sdit->tk_ayah = $request->tk_ayah;
      $sdit->penghasilan_ayah = $request->penghasilan_ayah;
      $sdit->nama_ibu = $request->nama_ibu;
      $sdit->nik_ibu = $request->nik_ibu;
      $sdit->ttl_ibu = $request->ttl_ibu;
      $sdit->p_ibu = $request->p_ibu;
      $sdit->pekerjaan_ibu = $request->pekerjaan_ibu;
      $sdit->tk_ibu = $request->tk_ibu;
      $sdit->penghasilan_ibu = $request->penghasilan_ibu;
      $sdit->alamat_ortu = $request->alamat_ortu;
      $sdit->nama_wali = $request->nama_wali;
      $sdit->p_wali = $request->p_wali;
      $sdit->pekerjaan_wali = $request->pekerjaan_wali;
      $sdit->penghasilan_wali = $request->penghasilan_wali;
      $sdit->hp_wali = $request->hp_wali;
      $sdit->alamat_wali = $request->alamat_wali;
      $sdit->image_pembayaran = $request->image_pembayaran;
      $sdit->image_kk = $request->image_kk;
      $sdit->image_ktp = $request->image_ktp;
      $sdit->image_akta = $request->image_akta;
      $sdit['image_pembayaran'] = $request->file('image_pembayaran')->store('', 'public');
      $sdit['image_kk'] = $request->file('image_kk')->store('', 'public');
      $sdit['image_ktp'] = $request->file('image_ktp')->store('', 'public');
      $sdit['image_akta'] = $request->file('image_akta')->store('', 'public');

      $sdit->save();

      return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SDIT  $sdit
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SDIT  $sdit
     * @return \Illuminate\Http\Response
     */
    public function edit( )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SDIT  $sdit
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SDIT  $sdit
     * @return \Illuminate\Http\Response
     */
    public function destroy( )
    {
        //
    }
}
