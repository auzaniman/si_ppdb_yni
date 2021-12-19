<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMPIT extends Model
{
  use HasFactory;

  protected $table = 'smpit';

  protected $fillable = [
    'school_id',
  ];

  // Relation
  public function school()
  {
    return $this->belongsTo(School::class);
  }
}
