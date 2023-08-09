<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar nama agama yang bisa dipilih
        $agama = ['Buddha', 'Hindu', 'Islam', 'Katolik', 'Protestan', 'Konghucu'];

        // Loop melalui daftar nama agama
        foreach ($agama as $nama) {
            DB::table('tabel_agama')->insert([
                'nama' => $nama,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
