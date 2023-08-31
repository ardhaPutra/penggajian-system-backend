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
        Schema::create('tabel_pinjaman_dan_kasbon', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal');
            $table->text('NIK');
            $table->integer('MaxPeminjaman');
            $table->integer('JmlPeminjaman');
            $table->integer('SaldoPiutang');
            $table->integer('sukubunga');
            $table->integer('maxAngsuran');
            $table->integer('totalPiutang');
            $table->text('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pinjaman_dan_kasbon');
    }
};
