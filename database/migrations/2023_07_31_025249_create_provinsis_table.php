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
        Schema::create('tabel_provinsi', function (Blueprint $table) {
            $table->bigInteger('pk')->primary();
            $table->integer('negarafk');
            $table->string('nm', 255);
            $table->text('ctn')->nullable();
            $table->dateTime('dateadded');
            $table->integer('addedbyfk')->nullable();
            $table->dateTime('datemodified')->nullable();
            $table->integer('lastuserfk')->nullable();
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
