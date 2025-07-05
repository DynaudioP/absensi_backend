<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKerja extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kerja';

    protected $fillable = [
        'jabatan_id',
        'hari_kerja',
        'jam_masuk',
        'jam_keluar',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
