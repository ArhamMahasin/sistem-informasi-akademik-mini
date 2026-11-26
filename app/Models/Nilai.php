<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    protected $table = 'nilai';

    protected $fillable = [
        'detail_krs_id',
        'nilai_kehadiran',
        'nilai_tugas',
        'nilai_uts',
        'nilai_uas',
        'nilai_praktikum',
        'nilai_akhir',
        'nilai_huruf',
        'bobot',
    ];

    protected function casts(): array
    {
        return [
            'nilai_kehadiran' => 'decimal:2',
            'nilai_tugas' => 'decimal:2',
            'nilai_uts' => 'decimal:2',
            'nilai_uas' => 'decimal:2',
            'nilai_praktikum' => 'decimal:2',
            'nilai_akhir' => 'decimal:2',
            'bobot' => 'decimal:2',
        ];
    }

    public function detailKrs(): BelongsTo
    {
        return $this->belongsTo(DetailKrs::class, 'detail_krs_id');
    }
}
