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
        Schema::create('tabel_shift_karyawan', function (Blueprint $table) {
            $table->text('NIK');
            $table->integer('Senin', 10)->nullable();
            $table->integer('Selasa', 10)->nullable();
            $table->integer('Rabu', 10)->nullable();
            $table->integer('Kamis', 10)->nullable();
            $table->integer('Jumat', 10)->nullable();
            $table->integer('Sabtu', 10)->nullable();
            $table->integer('Minggu', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_shift_karyawan');
    }
};
