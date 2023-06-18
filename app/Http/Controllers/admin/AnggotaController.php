<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use Illuminate\Http\Request;
use App\Models\Anggota;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\TemplateHandler;
class AnggotaController extends Controller
{
    public function index()
    {
        $data = array(
            "data_anggota" => Anggota::all(),
        );
        return TemplateHandler::templateViewHandler('admin.anggota', $data,"Anggota");
    }

    public function create()
    {
        return view('admin/tambah_anggota');
    }

    public function store(StoreAnggotaRequest $request)
    {
        $data = $request->validated();
        $query = Anggota::create($data);
        if($query){
            return redirect('/anggota')->with('pesan', 'berhasil menambah data');
        }
    }

    public function edit($id)
    {
        $data = array(
            "data_anggota" => Anggota::all()->where('NIM', $id)
        );
        return view('admin/edit_anggota', $data);
    }

    public function update(UpdateAnggotaRequest $request, $id)
    {
        $data = $request->validated();
        $query = Anggota::find($id)->update($data);
        if($query){
            return redirect('/anggota')->with('pesan', 'berhasil mengubah data');
        }
    }

    public function destroy($id)
    {
        $query = Anggota::find($id)->delete();
        if($query){
            return redirect('admin/anggota')->with('pesan', 'berhasil menghapus data');
        }
    }
    public function exportPdf()
    {
        $data = array("data_anggota" => Anggota::orderBy('NIM', 'asc')->get());
        $pdf = Pdf::loadView('admin.cetak_anggota', $data);
        return $pdf->download('data_anggota_export.pdf');
    }
}
