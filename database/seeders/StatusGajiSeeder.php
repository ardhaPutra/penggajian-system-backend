<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatusGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar nama status gaji yang bisa dipilih
        $statusGaji = ['Bulanan', 'Harian', 'Per-jam', 'Per-project'];

        // Loop melalui daftar nama status gaji
        foreach ($statusGaji as $nama) {
            DB::table('tabel_status_gaji')->insert([
                'nama' => $nama,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
