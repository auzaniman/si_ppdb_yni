<?php

namespace App\Http\Controllers;

use App\Models\School;
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

    // Table SMP
    public function smpit()
    {
      $students = Request::where('school_id', '5')->get();
      $schools = School::all();

      return view('admin_view.pages.table_siswa.table_smpit', [
        'students' => $students,
        'schools' => $schools,
        ]);
    }

    // Table SD
    public function sdit()
    {
      $students = Request::where('school_id', '4')->get();
      $schools = School::all();

      return view('admin_view.pages.table_siswa.table_sdit', [
        'students' => $students,
        'schools' => $schools,
        ]);
    }
}
