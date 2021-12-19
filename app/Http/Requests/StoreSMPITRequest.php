<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreTKIT1Request extends FormRequest
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
        'kelamin' => 'required',
        'nik' => 'required',
        'ttl' => 'required',
        'alamat' => 'required',
        'trans_sekolah' => 'required',
        'no_akta' => 'required',
        'hp_ortu' => 'required',
        'tb' => 'required',
        'bb' => 'required',
        'lingkar_kepala' => 'required',
        'jarak_waktu' => 'required',
        'jumlah_saudara' => 'required',
        'nama_ayah' => 'required',
        'ttl_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'pendidikan_ayah' => 'required',
        'penghasilan_ayah' => 'required',
        'nama_ibu' => 'required',
        'ttl_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'pendidikan_ibu' => 'required',
        'penghasilan_ibu' => 'required',
        ];
    }
}
