<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DetailKrs extends Model
{
    protected $table = 'detail_krs';

    protected $fillable = [
        'krs_id',
        'kelas_kuliah_id',
    ];

    public function krs(): BelongsTo
    {
        return $this->belongsTo(Krs::class, 'krs_id');
    }

    public function kelasKuliah(): BelongsTo
    {
        return $this->belongsTo(KelasKuliah::class, 'kelas_kuliah_id');
    }

    public function nilai(): HasOne
    {
        return $this->hasOne(Nilai::class, 'detail_krs_id');
    }
}
