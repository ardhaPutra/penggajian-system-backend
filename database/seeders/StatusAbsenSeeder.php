<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatusAbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar nama status absen yang bisa dipilih
        $statusAbsen = ['Sudah Absen', 'Belum Absen'];

        // Loop melalui daftar nama status absen
        foreach ($statusAbsen as $nama) {
            DB::table('tabel_status_absen')->insert([
                'nama' => $nama,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
