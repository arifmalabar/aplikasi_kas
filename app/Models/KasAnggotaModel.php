<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasAnggotaModel extends Model
{
    use HasFactory;
    protected $table = "tb_kas_anggota";
    protected $primaryKey = "kode_kas";
    protected $fillable = ['kode_jeniskas', 'nim', 'nominal', 'tanggal_bayar', 'metode'];
    public $timestamps = false;
    public function jenis_kas()
    {
        return $this->hasOne(JenisKategori::class, 'kode_jeniskas', 'kode_jeniskas');
    }
    public function anggota()
    {
        return $this->hasOne(Anggota::class, 'NIM', 'NIM');
    }
}
