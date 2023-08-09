<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class StatusPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar nama status pegawai yang bisa dipilih
        $statusPegawai = ['Tetap', 'Kontrak', 'Honorer', 'Freelance'];

        // Loop melalui daftar nama status pegawai
        foreach ($statusPegawai as $nama) {
            DB::table('tabel_status_pegawai')->insert([
                'nama' => $nama,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
