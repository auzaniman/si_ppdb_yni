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

      return view('user_view.pages.ppdb.form.form_sdit', [
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
      $sdit = $request->all();
      $sdit['image_pembayaran'] = $request->file('image_pembayaran')->store('', 'public');
      $sdit['image_kk'] = $request->file('image_kk')->store('', 'public');
      $sdit['image_ktp'] = $request->file('image_ktp')->store('', 'public');
      $sdit['image_akta'] = $request->file('image_akta')->store('', 'public');

      SDIT::create($sdit);

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
