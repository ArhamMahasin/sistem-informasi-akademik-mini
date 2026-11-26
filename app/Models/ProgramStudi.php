<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramStudi extends Model
{
    protected $table = 'program_studi';

    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
    ];

    public function mahasiswa(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'program_studi_id');
    }

    public function dosen(): HasMany
    {
        return $this->hasMany(Dosen::class, 'program_studi_id');
    }

    public function mataKuliah(): HasMany
    {
        return $this->hasMany(MataKuliah::class, 'program_studi_id');
    }
}
