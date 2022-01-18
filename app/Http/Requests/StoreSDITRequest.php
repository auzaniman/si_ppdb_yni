<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSDITRequest extends FormRequest
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
        'nama' => 'required',
        'nama_panggilan' => 'required',
        'jk' => 'required',
        'nik' => 'required',
        'akta' => 'required',
        'tl' => 'required',
        'ttl' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'transport' => 'required',
        'j_tinggal' => 'required',
        'jarak' => 'required',
        'waktu' => 'required',
        'penyakit' => 'required',
        'hp_ortu' => 'required',
        'e_mail' => 'required',
        'kip' => 'required',
        'anak' => 'required',
        'saudara' => 'required',
        'tiri' => 'required',
        'angkat' => 'required',
        'bahasa' => 'required',
        'bb' => 'required',
        'tb' => 'required',
        'gd' => 'required',
        'asal_sekolah' => 'required',
        'alamat_asal' => 'required',
        'nama_ayah' => 'required',
        'nik_ayah' => 'required',
        'ttl_ayah' => 'required',
        'p_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'tk_ayah' => 'required',
        'penghasilan_ayah' => 'required',
        'nama_ibu' => 'required',
        'nik_ibu' => 'required',
        'ttl_ibu' => 'required',
        'p_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'tk_ibu' => 'required',
        'penghasilan_ibu' => 'required',
        'alamat_ortu' => 'required',
        'image_pembayaran' => 'required|image',
        'image_kk' => 'required|image',
        'image_ktp' => 'required|image',
        'image_akta' => 'required|image',
        ];
    }
}
