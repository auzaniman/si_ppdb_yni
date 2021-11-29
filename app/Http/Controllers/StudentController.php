<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use App\Models\Stay;
use App\Models\Department;
use App\Models\Program;
use Illuminate\Http\Request;

class StudentController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $student = new Student();

      $student->school_id = $request->school_id;
      $student->stay_id = $request->stay_id;
      $student->department_id = $request->department_id;
      $student->program_id = $request->program_id;
      $student->nama = $request->nama;
      $student->ttl = $request->ttl;
      $student->alamat = $request->alamat;
      $student->asal_sekolah = $request->asal_sekolah;
      $student->nisn = $request->nisn;
      $student->nik = $request->nik;
      $student->nama_ayah = $request->nama_ayah;
      $student->nama_ibu = $request->nama_ibu;
      $student->pekerjaan_ayah = $request->pekerjaan_ayah;
      $student->pekerjaan_ibu = $request->pekerjaan_ibu;
      $student->ukuran_baju = $request->ukuran_baju;
      $student->hp_ortu = $request->hp_ortu;
      $student->hp_siswa = $request->hp_siswa;

      $student->save();

      return redirect()->back()->with([
        'message' => 'Pendaftaran Berhasil',
        'status' => 'Success'
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
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
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
