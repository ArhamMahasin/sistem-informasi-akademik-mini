<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_krs', function (Blueprint $table) {
            $table->id();

            // Relasi dengan KRS.
            $table->foreignId('krs_id')
                ->constrained('krs')
                ->cascadeOnDelete();

            // Kelas mata kuliah yang dipilih.
            $table->foreignId('kelas_kuliah_id')
                ->constrained('kelas_kuliah')
                ->restrictOnDelete();

            $table->timestamps();

            // Mencegah mahasiswa memilih kelas yang sama dua kali
            // dalam satu KRS.
            $table->unique(
                ['krs_id', 'kelas_kuliah_id'],
                'detail_krs_unique'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_krs');
    }
};