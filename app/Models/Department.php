<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  use HasFactory;

  protected $fillable = [
    'pilihan_jurusan'
  ];

  // Relation
  public function student()
  {
    return $this->hasMany(Student::class);
  }
}
