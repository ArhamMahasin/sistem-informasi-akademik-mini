<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'program_studi_id',
        'angkatan_id',
        'kelas_asal',
        'semester_berjalan',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'semester_berjalan' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function programStudi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id');
    }

    public function angkatan(): BelongsTo
    {
        return $this->belongsTo(Angkatan::class, 'angkatan_id');
    }

    public function krs(): HasMany
    {
        return $this->hasMany(Krs::class, 'mahasiswa_id');
    }
}
