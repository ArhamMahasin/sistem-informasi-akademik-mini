<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->id();

            // Relasi dengan kelas kuliah.
            $table->foreignId('kelas_kuliah_id')
                ->constrained('kelas_kuliah')
                ->cascadeOnDelete();

            // Dosen pengampu.
            $table->foreignId('dosen_id')
                ->constrained('dosen')
                ->restrictOnDelete();

            // Informasi jadwal perkuliahan.
            $table->enum('hari', [
                'Senin',
                'Selasa',
                'Rabu',
                'Kamis',
                'Jumat',
                'Sabtu',
                'Minggu',
            ]);

            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('ruangan', 50);

            $table->timestamps();

            // Mempermudah pencarian jadwal berdasarkan kelas.
            $table->index(['kelas_kuliah_id', 'hari']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliah');
    }
};