<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateHandler;
use App\Http\Requests\StoreKasAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Models\Anggota;
use App\Models\JenisKategori;
use Illuminate\Http\Request;
use App\Models\KasAnggotaModel;
use App\Http\Requests\UdpateKasAnggotRequest;

class KasAnggota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            "data_kas" => KasAnggotaModel::all(),
            "data_anggota" => Anggota::all(),
        );
        return TemplateHandler::templateViewHandler('admin.kas_anggota', $data, "Kas Anggota");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            "data_anggota" => Anggota::all(),
            "data_jeniskas" => JenisKategori::all()
        );
        return TemplateHandler::templateViewHandler('admin.input_kasanggota', $data, "Kas Anggota");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKasAnggotaRequest $request)
    {
        $data = $request->validated();
        KasAnggotaModel::create($data);
        return redirect('/kas_anggota')->with('pesan', 'berhasil menambah data');
    }

    public function edit($id)
    {
        $old_data = KasAnggotaModel::all()->where('kode_kas', $id);
        $data = array(
            "data_kas" => $old_data,
            "data_anggota" => Anggota::all(),
            "data_jeniskas" => JenisKategori::all()
        );
        return TemplateHandler::templateViewHandler('admin.edit_kasanggota', $data, "Kas Anggota");
    }

    public function update(UdpateKasAnggotRequest $request, $id)
    {
        $data = $request->validated();
        KasAnggotaModel::find($id)->update($data);
        return redirect('/kas_anggota')->with('pesan', 'berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KasAnggotaModel::find($id)->delete();
        return redirect('/kas_anggota')->with('pesan', 'berhasil mengahpus data');
    }
}
