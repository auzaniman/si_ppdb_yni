<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stay extends Model
{
  use HasFactory;

  protected $fillable = [
    'pilihan_tinggal'
  ];

  // Relation
  public function student()
  {
    return $this->hasMany(Student::class);
  }
}
