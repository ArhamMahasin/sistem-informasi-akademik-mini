<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();

            // Identitas mata kuliah.
            $table->string('kode_mk', 20)->unique();
            $table->string('nama_mk', 150);

            // Relasi program studi.
            $table->foreignId('program_studi_id')
                ->constrained('program_studi')
                ->restrictOnDelete();

            // Informasi akademik.
            $table->unsignedTinyInteger('semester');
            $table->unsignedTinyInteger('sks');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah');
    }
};