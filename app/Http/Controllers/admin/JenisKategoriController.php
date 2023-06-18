<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\TemplateHandler;
use App\Http\Requests\StoreJenisKategoriRequest;
use App\Http\Requests\UpdateJenisKategoriRequest;
use Illuminate\Http\Request;
use App\Models\JenisKategori;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class JenisKategoriController extends Controller
{
    public function index()
    {
        $data = array("data_jeniskas" => JenisKategori::all());
        return TemplateHandler::templateViewHandler('admin.jenis_kategori', $data,"Jenis Kategori");
    }
    public function create()
    {
        return view("admin.tambah_jeniskategori");
    }
    public function store(StoreJenisKategoriRequest $request)
    {
        $data = $request->validated();
        JenisKategori::create($data);
    }
    public function cetakPdf()
    {
        $data = array("data_jeniskas" => JenisKategori::all());
        $pdf = PDF::loadView('admin.cetak_jeniskategori', $data);
        return $pdf->download('cetak_jenis_kategori.pdf');
    }
    public function edit($id)
    {
        $data = array(
            "data_jeniskas" => JenisKategori::where('kode_jeniskas', $id)->get()
        );
        return view('admin.edit_jenis_kategori', $data);
    }
    public function update(UpdateJenisKategoriRequest $request, $id)
    {
        $data = $request->validated();
        $query = JenisKategori::find($id)->update($data);
        if($query){
            return redirect('jenis_kas')->with('pesan', 'berhasil mengubah data');
        }
    }
    public function destroy($id)
    {
        $query = JenisKategori::find($id)->delete();
        if ($query){
            return redirect('jenis_kas')->with('pesan', 'berhasil menghapus data');
        }
    }
}
