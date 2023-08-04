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
        Schema::create('tabel_penggajian', function (Blueprint $table) {
            $table->integer('kdcabang');
            $table->string('kdGaji')->primary();
            $table->date('Tanggal');
            $table->text('NIK');
            $table->text('Departement');
            $table->text('Jabatan');
            $table->text('StatusGaji');
            $table->integer('JmlHariEfektif');
            $table->integer('JmlHariKerja');
            $table->integer('JmlJamLembur');
            $table->integer('GAPOK');
            $table->integer('Tjab');
            $table->integer('TKomparatif');
            $table->integer('TTransport');
            $table->integer('Bonus');
            $table->integer('TJAMSOSTEK');
            $table->integer('TmasaKerja');
            $table->integer('TLain');
            $table->integer('UangLembur');
            $table->integer('GajiBruto');
            $table->integer('Kasbon');
            $table->integer('SaldoUtang');
            $table->integer('AngsuranMin');
            $table->integer('AngsuranTambahan');
            $table->integer('BungaAngsuran');
            $table->integer('PPph21');
            $table->integer('PJAMSOSTEK');
            $table->integer('PKoperasi');
            $table->integer('PPensiun');
            $table->integer('PTerlambat');
            $table->integer('PLain');
            $table->integer('TotalPotongan');
            $table->integer('TotalGaji');
            $table->integer('Rounded');
            $table->integer('Pajak');
            $table->integer('NettGaji');
            $table->text('Memo')->nullable();
            $table->boolean('posting');
            $table->integer('Transfer')->nullable();
            $table->text('rekGaji')->nullable();
            $table->text('rekbyrpiutang')->nullable();
            $table->text('rekbungapiutang')->nullable();
            $table->text('rek')->nullable();
            $table->text('useradd')->nullable();
            $table->date('dateadd')->nullable();
            $table->text('useredit')->nullable();
            $table->date('dateedit')->nullable();
            $table->integer('pjkm')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_penggajian');
    }
};
