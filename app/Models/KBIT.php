<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KBIT extends Model
{
    use HasFactory;

    protected $table = 'kbit';

    protected $fillable = [
    'school_id',
    'nama_akta',
    'nama_panggil',
    'jenis_kelamin',
    'nik_anak',
    'no_akta',
    'tt_lahir',
    'agama',
    'alamat_siswa',
    'transportasi',
    'jenis_tinggal',
    'jarak_tinggal',
    'waktu_tempuh',
    'penyakit',
    'anak_ke',
    'jml_saudara_kandung',
    'jml_saudara_tiri',
    'jml_saudara_angkat',
    'bahasa_sehari',
    'tb',
    'bb',
    'gd',
    'hobi',
    'nama_ayah',
    'nik_ayah',
    'ttl_ayah',
    'pendidikan_ayah',
    'pekerjaan_ayah',
    'tempat_kerja_ayah',
    'penghasilan_ayah',
    'no_ayah',
    'nama_ibu',
    'nik_ibu',
    'ttl_ibu',
    'pendidikan_ibu',
    'pekerjaan_ibu',
    'tempat_kerja_ibu',
    'penghasilan_ibu',
    'no_ibu',
    'alamat_ortu',
    'nama_wali',
    'pendidikan_wali',
    'pekerjaan_wali',
    'penghasilan_wali',
    'no_wali',
    'alamat_wali',
  ];

  // Relation
  public function school()
  {
    return $this->belongsTo(School::class);
  }

}
