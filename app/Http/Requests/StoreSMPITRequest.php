<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSMPITRequest extends FormRequest
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
        'program' => 'required|string|in:Reguler,Tahfidz',
        'nama' => 'required',
        'ttl' => 'required',
        'alamat' => 'required',
        'asal_sekolah' => 'required',
        'nisn' => 'required|max:10',
        'nik' => 'required|max:16',
        'kk' => 'required|max:16',
        'nama_ayah' => 'required',
        'nik_ayah' => 'required|max:16',
        'nama_ibu' => 'required',
        'nik_ibu' => 'required|max:16',
        'pekerjaan_ayah' => 'required',
        'pekerjaan_ibu' => 'required',
        'ukuran_baju' => 'required',
        'hp_siswa' => 'required',
        'hp_ortu' => 'required',
        'image' => 'required|image',
        'image_bukti' => 'required|image',
        ];
    }
}
