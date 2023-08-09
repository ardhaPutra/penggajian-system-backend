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
            $table->id();
            $table->string('NIK');
            $table->integer('Senin')->nullable();
            $table->integer('Selasa')->nullable();
            $table->integer('Rabu')->nullable();
            $table->integer('Kamis')->nullable();
            $table->integer('Jumat')->nullable();
            $table->integer('Sabtu')->nullable();
            $table->integer('Minggu')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
