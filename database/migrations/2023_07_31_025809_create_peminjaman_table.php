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
        Schema::create('tabel_peminjaman', function (Blueprint $table) {
            $table->integer('kdCabang')->nullable();
            $table->bigInteger('kdPjm')->primary();
            $table->dateTime('Tanggal');
            $table->text('NIK');
            $table->integer('MaxPeminjaman');
            $table->integer('JmlPeminjaman');
            $table->integer('SaldoPiutang');
            $table->integer('sukubunga');
            $table->integer('maxAngsuran');
            $table->integer('totalPiutang');
            $table->text('note')->nullable();
            $table->boolean('KasBonFlag');
            $table->boolean('posting');
            $table->text('rekpinjam')->nullable();
            $table->boolean('Transfer')->nullable();
            $table->text('akunkas')->nullable();
            $table->text('Useradd')->nullable();
            $table->datetime('dateadd')->nullable();
            $table->text('Useredit')->nullable();
            $table->datetime('Datetime')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_peminjaman');
    }
};
