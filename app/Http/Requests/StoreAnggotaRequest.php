<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreAnggotaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'NIM' => 'required|unique:tb_anggota',
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required'
        ];
    }
}
