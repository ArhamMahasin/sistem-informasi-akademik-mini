<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->id();

            // Mahasiswa pemilik KRS.
            $table->foreignId('mahasiswa_id')
                ->constrained('mahasiswa')
                ->restrictOnDelete();

            // Periode akademik KRS.
            $table->foreignId('tahun_akademik_id')
                ->constrained('tahun_akademik')
                ->restrictOnDelete();

            // Total SKS yang diambil.
            $table->unsignedTinyInteger('total_sks')->default(0);

            // Status KRS.
            $table->enum('status', [
                'draft',
                'disimpan',
            ])->default('draft');

            $table->timestamps();

            // Satu mahasiswa hanya memiliki satu KRS
            // dalam satu periode akademik.
            $table->unique(
                ['mahasiswa_id', 'tahun_akademik_id'],
                'krs_mahasiswa_tahun_unique'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('krs');
    }
};