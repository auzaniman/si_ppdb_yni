<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SDIT extends Model
{
  use HasFactory;

  protected $table = 'sdit';

  protected $fillable = [
    'school_id',
    'nama',
    'nama_panggilan',
    'jk',
    'nik',
    'akta',
    'tl',
    'ttl',
    'agama',
    'alamat',
    'transport',
    'j_tinggal',
    'jarak',
    'waktu',
    'penyakit',
    'hp_ortu',
    'e_mail',
    'kip',
    'anak',
    'saudara',
    'tiri',
    'angkat',
    'bahasa',
    'bb',
    'tb',
    'gd',
    'asal_sekolah',
    'alamat_asal',
    'nama_ayah',
    'nik_ayah',
    'ttl_ayah',
    'p_ayah',
    'pekerjaan_ayah',
    'tk_ayah',
    'penghasilan_ayah',
    'nama_ibu',
    'nik_ibu',
    'ttl_ibu',
    'p_ibu',
    'pekerjaan_ibu',
    'tk_ibu',
    'penghasilan_ibu',
    'alamat_ortu',
    'nama_wali',
    'p_wali',
    'pekerjaan_wali',
    'penghasilan_wali',
    'hp_wali',
    'alamat_wali',
    'image_pembayaran',
    'image_kk',
    'image_ktp',
    'image_akta',
  ];

  // Relation
  public function school()
  {
    return $this->belongsTo(School::class);
  }
}
