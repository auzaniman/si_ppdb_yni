<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
  use SoftDeletes;
  use HasFactory;

  protected $fillable = [
    'school_id',
    'stay_id',
    'department_id',
    'program_id',
    'nama',
    'ttl',
    'alamat',
    'asal_sekolah',
    'nisn',
    'nik',
    'nama_ayah',
    'nama_ibu',
    'pekerjaan_ayah',
    'pekerjaan_ibu',
    'ukuran_baju',
    'hp_siswa',
    'hp_ortu',
  ];

  // Relation
  public function school()
  {
    return $this->belongsTo(School::class);
  }

  public function stay()
  {
    return $this->belongsTo(Stay::class);
  }

  public function department()
  {
    return $this->belongsTo(Department::class);
  }

  public function program()
  {
    return $this->belongsTo(Program::class);
  }
}
