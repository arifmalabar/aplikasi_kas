<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKategori extends Model
{
    use HasFactory;
    protected $table = "tb_jeniskas";
    protected $primaryKey = "kode_jeniskas";
    protected $fillable = ['nama_kas', 'jumlah_kas', 'keterangan'];
    public $timestamps = false;
    public function kas_anggota()
    {
        return $this->belongsTo(KasAnggotaModel::class, 'kode_jeniskas', 'kode_jeniskas');
    }
}
