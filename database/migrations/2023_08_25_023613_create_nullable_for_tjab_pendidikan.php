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
        Schema::table('tabel_karyawan', function (Blueprint $table) {
            $table->date('tglLahir')->change();
            $table->date('awalKontrak')->change();
            $table->date('akhirKontrak')->change();
            $table->integer('pendidikan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tabel_karyawan', function (Blueprint $table) {
            //
        });
    }
};
