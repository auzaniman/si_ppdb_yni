<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\KBIT;
use App\Models\TKIT1;
use App\Models\TKIT2;
use App\Models\SDIT;
use App\Models\SMPIT;
use App\Models\SMAIT;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_view.pages.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Request  $request
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
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    // Table KB
    public function kbit()
    {
      $kbit = KBIT::where('school_id', '1')->get();
      $schools = School::all();

      return view('admin_view.pages.table_siswa.table_kbit', [
        'kbit' => $kbit,
        'schools' => $schools,
        ]);
    }

    // Table TK1
    public function tkit1()
    {
      $tkit1 = TKIT1::where('school_id', '2')->get();
      $schools = School::all();

      return view('admin_view.pages.table_siswa.table_tkit1', [
        'tkit1' => $tkit1,
        'schools' => $schools,
        ]);
    }

    // Table TK2
    public function tkit2()
    {
      $tkit2 = TKIT2::where('school_id', '3')->get();
      $schools = School::all();

      return view('admin_view.pages.table_siswa.table_tkit2', [
        'tkit2' => $tkit2,
        'schools' => $schools,
        ]);
    }

    // Table SD
    public function sdit()
    {
      $sdit = SDIT::where('school_id', '4')->get();
      $schools = School::all();

      return view('admin_view.pages.table_siswa.table_sdit', [
        'sdit' => $sdit,
        'schools' => $schools,
        ]);
    }

    // Table SMP
    public function smpit()
    {
      $smpit = SMPIT::where('school_id', '5')->get();
      $schools = School::all();

      return view('admin_view.pages.table_siswa.table_smpit', [
        'smpit' => $smpit,
        'schools' => $schools,
        ]);
    }

    // Table SMA
    public function smait()
    {
      $smait = SMAIT::where('school_id', '6')->get();
      $schools = School::all();

      return view('admin_view.pages.table_siswa.table_sma', [
        'smait' => $smait,
        'schools' => $schools,
        ]);
    }

}
