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

            $table->id();
            $table->dateTime('Tanggal');
            $table->text('NIK');
            $table->integer('gaji_bulan')->nullable();
            $table->integer('tahun')->nullable();
            $table->integer('JmlHariEfektif');
            $table->integer('JmlHariKerja');
            $table->integer('JmlJamLembur');
            $table->integer('GAPOK');
            $table->integer('TMasaKerja');
            $table->integer('Tjab');
            $table->integer('TKomparatif');
            $table->integer('TTransport');
            $table->integer('PremiKesehatan');
            $table->integer('Bonus');
            $table->integer('TLain');
            $table->integer('UangLembur');
            $table->integer('TJamsostek');
            $table->integer('GajiBruto');
            $table->integer('Kasbon');
            $table->integer('AngsuranMin');
            $table->integer('AngsuranTambahan');
            $table->integer('BungaAngsuran');
            $table->integer('PKoperasi');
            $table->integer('PPph21');
            $table->integer('PJAMSOSTEK');
            $table->integer('PPensiun');
            $table->integer('PTerlambat');
            $table->integer('PLain');
            $table->integer('TotalPotongan');
            $table->integer('TotalGaji');
            $table->integer('Rounded');
            $table->integer('Pajak');
            $table->integer('NettGaji');
            $table->text('Note')->nullable();
            $table->boolean('posting');
            $table->integer('Transfer')->nullable();
            $table->text('rekGaji')->nullable();
            $table->text('rekbyrpiutang')->nullable();
            $table->text('rekbungapiutang')->nullable();
            $table->text('rek')->nullable();
            $table->text('Useradd')->nullable();
            $table->date('dateadd')->nullable();
            $table->text('Useredit')->nullable();
            $table->date('Dateedit')->nullable();
            $table->integer('pjkm')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
