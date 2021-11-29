<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use App\Models\Stay;
use App\Models\Department;
use App\Models\Program;
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

    // Table SMA
    public function smait()
    {
      $students = Student::where('school_id', '6')->get();
      $schools = School::all();
      $stays = Stay::all();
      $departments = Department::all();
      $programs = Program::all();

      return view('admin_view.pages.table_siswa.table_sma', [
        'students' => $students,
        'schools' => $schools,
        'stays' => $stays,
        'departments' => $departments,
        'programs' => $programs,
        ]);
    }

    // Table SMP
    public function smpit()
    {
      $students = Student::where('school_id', '5')->get();
      $schools = School::all();
      $stays = Stay::all();
      $departments = Department::all();
      $programs = Program::all();

      return view('admin_view.pages.table_siswa.table_smpit', [
        'students' => $students,
        'schools' => $schools,
        'stays' => $stays,
        'departments' => $departments,
        'programs' => $programs,
        ]);
    }

    // Table SD
    public function sdit()
    {
      $students = Student::where('school_id', '4')->get();
      $schools = School::all();
      $stays = Stay::all();
      $departments = Department::all();
      $programs = Program::all();

      return view('admin_view.pages.table_siswa.table_sdit', [
        'students' => $students,
        'schools' => $schools,
        'stays' => $stays,
        'departments' => $departments,
        'programs' => $programs,
        ]);
    }
}
