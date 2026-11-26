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
        Schema::table('users', function (Blueprint $table) {
            // Username digunakan untuk login.
            $table->string('username')->unique()->after('id');

            // Email bersifat opsional.
            $table->string('email')->nullable()->change();

            // Email tidak wajib diverifikasi.
            $table->timestamp('email_verified_at')->nullable()->change();

            // Nama hanya digunakan untuk Administrator.
            $table->string('name')->nullable()->change();

            // Menentukan hak akses pengguna.
            $table->enum('role', [
                'admin',
                'dosen',
                'mahasiswa',
            ])->default('mahasiswa')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['username']);
            $table->dropColumn(['username', 'role']);

            $table->string('name')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
        });
    }
};