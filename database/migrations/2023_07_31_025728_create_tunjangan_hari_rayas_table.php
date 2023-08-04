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
        Schema::create('tabel_tunjangan_hari_raya', function (Blueprint $table) {
            $table->integer('kdCabang');
            $table->text('kdTHR');
            $table->dateTime('tanggal');
            $table->text('NIK');
            $table->integer('JmlPeriodeTHR');
            $table->integer('JmlHariKerja');
            $table->integer('NilaiTHRPerPeriode');
            $table->integer('NilaiTHR');
            $table->integer('Rounded');
            $table->integer('Pajak');
            $table->integer('TotalNilaiTHR');
            $table->text('note')->nullable();
            $table->integer('status');
            $table->tinyInteger('posting');
            $table->integer('transfer')->nullable();
            $table->integer('rekTHR')->nullable();
            $table->integer('rekpph')->nullable();
            $table->text('akunkas')->nullable();
            $table->text('Useradd')->nullable();
            $table->dateTime('dateadd')->nullable();
            $table->text('Useredit')->nullable();
            $table->dateTime('Dateedit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_tunjangan_hari_raya');
    }
};
