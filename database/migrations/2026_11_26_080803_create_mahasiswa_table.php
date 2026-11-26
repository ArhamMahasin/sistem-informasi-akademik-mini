<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();

            // Relasi dengan akun pengguna.
            $table->foreignId('user_id')
                ->unique()
                ->constrained('users')
                ->cascadeOnDelete();

            // Identitas mahasiswa.
            $table->string('nim', 20)->unique();
            $table->string('nama', 100);

            // Relasi akademik.
            $table->foreignId('program_studi_id')
                ->constrained('program_studi')
                ->restrictOnDelete();

            $table->foreignId('angkatan_id')
                ->constrained('angkatan')
                ->restrictOnDelete();

            // Informasi kelas dan semester.
            $table->enum('kelas_asal', ['A', 'B', 'C', 'D']);
            $table->unsignedTinyInteger('semester_berjalan')->default(1);

            // Status mahasiswa.
            $table->enum('status', [
                'Aktif',
                'Cuti',
                'Lulus',
                'Nonaktif',
            ])->default('Aktif');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};