<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TahunAkademik extends Model
{
    protected $table = 'tahun_akademik';

    protected $fillable = [
        'tahun_akademik',
        'semester',
        'tanggal_mulai',
        'tanggal_selesai',
        'status_aktif',
        'krs_dibuka',
        'tanggal_mulai_krs',
        'tanggal_selesai_krs',
        'nilai_dibuka',
        'tanggal_mulai_nilai',
        'tanggal_selesai_nilai',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_mulai' => 'date',
            'tanggal_selesai' => 'date',
            'status_aktif' => 'boolean',
            'krs_dibuka' => 'boolean',
            'tanggal_mulai_krs' => 'datetime',
            'tanggal_selesai_krs' => 'datetime',
            'nilai_dibuka' => 'boolean',
            'tanggal_mulai_nilai' => 'datetime',
            'tanggal_selesai_nilai' => 'datetime',
        ];
    }

    public function kelasKuliah(): HasMany
    {
        return $this->hasMany(KelasKuliah::class, 'tahun_akademik_id');
    }

    public function krs(): HasMany
    {
        return $this->hasMany(Krs::class, 'tahun_akademik_id');
    }
}
