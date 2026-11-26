<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelas_kuliah', function (Blueprint $table) {
            $table->id();

            // Relasi mata kuliah.
            $table->foreignId('mata_kuliah_id')
                ->constrained('mata_kuliah')
                ->restrictOnDelete();

            // Relasi tahun akademik.
            $table->foreignId('tahun_akademik_id')
                ->constrained('tahun_akademik')
                ->restrictOnDelete();

            // Identitas dan kapasitas kelas.
            $table->enum('nama_kelas', ['A', 'B', 'C', 'D']);
            $table->unsignedTinyInteger('kapasitas')->default(35);

            $table->timestamps();

            // Satu mata kuliah hanya memiliki satu kelas
            // dengan nama yang sama pada periode akademik yang sama.
            $table->unique(
                ['mata_kuliah_id', 'tahun_akademik_id', 'nama_kelas'],
                'kelas_kuliah_unique'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas_kuliah');
    }
};