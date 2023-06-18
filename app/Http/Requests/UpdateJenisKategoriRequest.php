<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateJenisKategoriRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nama_kas' => 'required',
            'jumlah_kas' => 'required',
            'keterangan' => 'required'
        ];
    }
}
