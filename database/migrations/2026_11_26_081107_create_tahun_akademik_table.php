<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tahun_akademik', function (Blueprint $table) {
            $table->id();

            // Identitas tahun akademik.
            $table->string('tahun_akademik', 9);
            $table->enum('semester', ['Ganjil', 'Genap']);

            // Periode akademik.
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');

            // Status periode akademik.
            $table->boolean('status_aktif')->default(false);

            // Periode pengisian KRS.
            $table->boolean('krs_dibuka')->default(false);
            $table->dateTime('tanggal_mulai_krs')->nullable();
            $table->dateTime('tanggal_selesai_krs')->nullable();

            // Periode pengisian dan pengubahan nilai.
            $table->boolean('nilai_dibuka')->default(false);
            $table->dateTime('tanggal_mulai_nilai')->nullable();
            $table->dateTime('tanggal_selesai_nilai')->nullable();

            $table->timestamps();

            // Satu tahun akademik tidak boleh memiliki
            // semester yang sama lebih dari satu kali.
            $table->unique(
                ['tahun_akademik', 'semester'],
                'tahun_akademik_semester_unique'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tahun_akademik');
    }
};