<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatusPerkawinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar nama status perkawinan yang bisa dipilih
        $statusPerkawinan = ['Menikah', 'Belum Menikah', 'Duda', 'Janda'];

        // Loop melalui daftar nama status perkawinan
        foreach ($statusPerkawinan as $nama) {
            DB::table('tabel_status_perkawinan')->insert([
                'nama' => $nama,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
