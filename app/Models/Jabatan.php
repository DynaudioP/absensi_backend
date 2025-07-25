<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function jadwalKerja()
    {
        return $this->hasMany(JadwalKerja::class);
    }
}
