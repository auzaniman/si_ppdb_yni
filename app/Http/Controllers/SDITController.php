<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\SDIT;
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
    public function store(Request $request)
    {
      $sdit = $request->all();
      SDIT::create($sdit);

      return redirect()->back()->with([
        'status' => 'Pendaftaran Berhasil Dilakukan, Silahkan Lakukan Konfirmasi Kepada Admin'
      ]);
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
    public function update(Request $request,  )
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
