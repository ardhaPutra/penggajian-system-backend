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
        Schema::create('tabel_uang_saku', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->date('Tanggal');
            $table->integer('jmlharikerja');
            $table->integer('jmltransport');
            $table->integer('jmluangsaku');
            $table->integer('totalditerima');
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
        Schema::dropIfExists('tabel_uang_saku');
    }
};
