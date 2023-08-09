<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatusPekerjaanSuamiIstriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar status pekerjaan yang bisa dipilih
        $statusPekerjaan = ['Bekerja', 'Tidak Bekerja'];

        // Loop melalui daftar status pekerjaan
        foreach ($statusPekerjaan as $nama) {
            DB::table('tabel_status_pekerjaan_suami_istri')->insert([
                'nama' => $nama,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
