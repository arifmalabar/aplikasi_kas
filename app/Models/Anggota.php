<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = "tb_anggota";
    protected $fillable = ['NIM', 'nama', 'email', 'jenis_kelamin', 'foto'];
    protected $primaryKey = "NIM";
    public $timestamps = false;
    public $incrementing = false;
    public function kas_anggota()
    {
        return $this->belongsTo(KasAnggotaModel::class, 'NIM', 'NIM');
    }
}
