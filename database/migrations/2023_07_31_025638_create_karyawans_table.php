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
        Schema::create('tabel_karyawan', function (Blueprint $table) {
            $table->integer('kdcabang');
            $table->string('nik')->primary();
            $table->string('nmKar');
            $table->integer('Sex');
            $table->date('tglmasuk');
            $table->date('tglkeluar');
            $table->text('almt');
            $table->integer('kdkota');
            $table->integer('kdprovinsi');
            $table->integer('kdnegara');
            $table->text('tlp');
            $table->text('statusKar');
            $table->date('awalKontrak')->nullable();
            $table->date('akhirKontrak')->nullable();
            $table->text('noSuratKontrak')->nullable();
            $table->integer('kdDep');
            $table->integer('kdJab');
            $table->integer('kdgol');
            $table->integer('sisaCuti');
            $table->integer('statusTransfer');
            $table->text('noRek')->nullable();
            $table->text('bank')->nullable();
            $table->text('atasnama')->nullable();
            $table->text('npwp')->nullable();
            $table->integer('gapok');
            $table->integer('tjab');
            $table->integer('tKomparatif');
            $table->integer('pJamsostek');
            $table->integer('pKoperasi');
            $table->integer('statusGaji');
            $table->integer('defUS');
            $table->integer('pensiun');
            $table->integer('potpensin');
            $table->integer('salKasbon');
            $table->integer('salHutang');
            $table->text('almtAsal');
            $table->text('tmpLahir');
            $table->date('tglLahir');
            $table->integer('kdagama');
            $table->text('statusNikah')->nullable();
            $table->integer('statusSuami')->nullable();
            $table->integer('jmlIstri')->nullable();
            $table->integer('jmlAnak')->nullable();
            $table->integer('pendidikan');
            $table->boolean('aktif');
            $table->text('note')->nullable();
            $table->text('foto');
            $table->integer('ship')->nullable();
            $table->text('useradd')->nullable();
            $table->date('dateadd')->nullable();
            $table->text('useredit')->nullable();
            $table->date('dateedit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_karyawan');
    }
};
