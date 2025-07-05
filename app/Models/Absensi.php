<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tanggal',
        'jam_masuk',
        'jam_keluar',
        'terlambat',
        'pulang_cepat',
        'status',
        'foto_muka',
        'foto_lokasi',
        'lokasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Akses hari dari tanggal absensi
    public function getHariAttribute()
    {
        return Carbon::parse($this->tanggal)->translatedFormat('l');
    }
}
