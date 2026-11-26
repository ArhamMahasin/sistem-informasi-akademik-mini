<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KelasKuliah extends Model
{
    protected $table = 'kelas_kuliah';

    protected $fillable = [
        'mata_kuliah_id',
        'tahun_akademik_id',
        'nama_kelas',
        'kapasitas',
    ];

    protected function casts(): array
    {
        return [
            'kapasitas' => 'integer',
        ];
    }

    public function mataKuliah(): BelongsTo
    {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }

    public function tahunAkademik(): BelongsTo
    {
        return $this->belongsTo(TahunAkademik::class, 'tahun_akademik_id');
    }

    public function jadwalKuliah(): HasMany
    {
        return $this->hasMany(JadwalKuliah::class, 'kelas_kuliah_id');
    }

    public function detailKrs(): HasMany
    {
        return $this->hasMany(DetailKrs::class, 'kelas_kuliah_id');
    }
}
