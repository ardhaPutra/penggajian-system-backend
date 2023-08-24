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
       // Drop the 'tabel_karyawan' table if it exists
       Schema::dropIfExists('tabel_karyawan');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
