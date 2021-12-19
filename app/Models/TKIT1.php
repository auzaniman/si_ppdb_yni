<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TKIT1 extends Model
{
    use HasFactory;

    protected $table = 'tkit1';

    protected $fillable = [
    'school_id',
    'nama',
    'nama_panggilan',
    'kelamin',
    'nik',
    'ttl',
    'alamat',
    'trans_sekolah',
    'no_akta',
    'hp_ortu',
    'tb',
    'bb',
    'lingkar_kepala',
    'jarak_waktu',
    'jumlah_saudara',
    'nama_ayah',
    'ttl_ayah',
    'pekerjaan_ayah',
    'pendidikan_ayah',
    'penghasilan_ayah',
    'nama_ibu',
    'ttl_ibu',
    'pekerjaan_ibu',
    'pendidikan_ibu',
    'penghasilan_ibu',
  ];

  // Relation
  public function school()
  {
    return $this->belongsTo(School::class);
  }

}
