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
            $table->id();
            $table->string('NIK');
            $table->string('nmKar');
            $table->integer('Sex');
            $table->date('tglmsk')->nullable();
            $table->date('tglkeluar')->nullable();
            $table->text('almt');
            $table->integer('kdkota');
            $table->integer('kdprovinsi');
            $table->integer('kdnegara');
            $table->text('tlp');
            $table->text('statusKar');
            $table->dateTime('awalKontrak')->nullable();
            $table->dateTime('akhirKontrak')->nullable();
            $table->text('noSuratKontrak')->nullable();
            $table->integer('kdDep');
            $table->integer('kdJab');
            $table->integer('kdGol')->nullable();
            $table->integer('sisaCuti')->nullable();
            $table->integer('statusTransfer')->nullable();
            $table->text('noRek')->nullable();
            $table->text('bank')->nullable();
            $table->text('atasnama')->nullable();
            $table->text('npwp')->nullable();
            $table->integer('gapok');
            $table->integer('tjab')->nullable();
            $table->integer('tKomparatif')->nullable();
            $table->integer('pJamsostek')->nullable();
            $table->integer('pKoperasi')->nullable();
            $table->integer('statusGaji');
            $table->text('almtAsal');
            $table->text('tmpLahir');
            $table->dateTime('tglLahir');
            $table->integer('kdagama');
            $table->text('statusNikah')->nullable();
            $table->integer('statusSuami')->nullable();
            $table->integer('jmlIstri')->nullable();
            $table->integer('jmlAnak')->nullable();
            $table->text('pendidikan');
            $table->boolean('aktif');
            $table->text('note')->nullable();
            $table->text('foto')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
