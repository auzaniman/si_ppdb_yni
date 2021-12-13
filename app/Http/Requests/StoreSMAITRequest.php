<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSMAITRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
        'stay' => 'required|string|in:Reguler,Boarding',
        'department' => 'required|string|in:IPA,IPS',
        'program' => 'required|string|in:Reguler,Tahfidz',
        'nama' => 'required',
        'ttl' => 'required',
        'alamat' => 'required',
        'asal_sekolah' => 'required',
        'nisn' => 'required|integer|max:10',
        'nik' => 'required|integer|max:16',
        'kk' => 'required|integer|max:16',
        'nama_ayah' => 'required',
        'nik_ayah' => 'required|integer|max:16',
        'nama_ibu' => 'required',
        'nik_ibu' => 'required|integer|max:16',
        'pekerjaan_ayah' => 'required',
        'pekerjaan_ibu' => 'required',
        'ukuran_baju' => 'required',
        'hp_siswa' => 'required|integer',
        'hp_ortu' => 'required|integer',
        'image' => 'required|image',
        ];
    }
}
