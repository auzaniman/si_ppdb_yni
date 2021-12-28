<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreKBITRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'school_id' => 'required',
        'nama_akta' => 'required',
        'nama_panggil' => 'required',
        'jenis_kelamin' => 'required',
        'nik_anak' => 'required',
        'no_akta' => 'required',
        'tt_lahir' => 'required',
        'agama' => 'required',
        'alamat_siswa' => 'required',
        'transportasi' => 'required',
        'jenis_tinggal' => 'required|string|in:Rumah Sendiri,Sewa',
        'jarak_tinggal' => 'required',
        'waktu_tempuh' => 'required',
        'penyakit' => 'required',
        'anak_ke' => 'required',
        'jml_saudara_kandung' => 'required',
        'jml_saudara_tiri' => 'required',
        'jml_saudara_angkat' => 'required',
        'bahasa_sehari' => 'required',
        'tb' => 'required',
        'bb' => 'required',
        'gd' => 'required',
        'hobi' => 'required',
        'nama_ayah' => 'required',
        'nik_ayah' => 'required',
        'ttl_ayah' => 'required',
        'pendidikan_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'tempat_kerja_ayah' => 'required',
        'penghasilan_ayah' => 'required',
        'no_ayah' => 'required',
        'nama_ibu' => 'required',
        'nik_ibu' => 'required',
        'ttl_ibu' => 'required',
        'pendidikan_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'tempat_kerja_ibu' => 'required',
        'penghasilan_ibu' => 'required',
        'no_ibu' => 'required',
        'alamat_ortu' => 'required',
        ];
    }
}
