<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();

            // Relasi dengan detail KRS.
            $table->foreignId('detail_krs_id')
                ->unique()
                ->constrained('detail_krs')
                ->cascadeOnDelete();

            // Komponen nilai.
            $table->decimal('nilai_kehadiran', 5, 2)->nullable();
            $table->decimal('nilai_tugas', 5, 2)->nullable();
            $table->decimal('nilai_uts', 5, 2)->nullable();
            $table->decimal('nilai_uas', 5, 2)->nullable();
            $table->decimal('nilai_praktikum', 5, 2)->nullable();

            // Hasil perhitungan nilai.
            $table->decimal('nilai_akhir', 5, 2)->nullable();
            $table->enum('nilai_huruf', [
                'A',
                'B',
                'C',
                'D',
                'E',
            ])->nullable();

            // Bobot nilai untuk perhitungan IP/IPK.
            $table->decimal('bobot', 3, 2)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};