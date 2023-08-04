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
        Schema::create('tabel_peminjaman    ', function (Blueprint $table) {
            $table->integer('kdCabang');
            $table->text('kdPjm');
            $table->dateTime('Tanggal');
            $table->text('NIK');
            $table->integer('MaxPeminjaman');
            $table->integer('JmlPeminjaman');
            $table->integer('SaldoPiutang');
            $table->integer('sukubunga');
            $table->integer('maxAngsuran');
            $table->integer('totalPiutang');
            $table->text('note');
            $table->boolean('KasBonFlag');
            $table->boolean('posting');
            $table->text('rekpinjam');
            $table->boolean('Transfer');
            $table->text('akunkas');
            $table->text('Useradd');
            $table->datetime('dateadd');
            $table->text('Useredit');
            $table->datetime('Datetime');
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
