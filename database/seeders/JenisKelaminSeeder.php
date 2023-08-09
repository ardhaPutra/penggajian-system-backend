<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar nama jenis kelamin yang bisa dipilih
        $jenisKelamin = ['Laki-laki', 'Perempuan'];

        // Loop melalui daftar nama jenis kelamin
        foreach ($jenisKelamin as $nama) {
            DB::table('tabel_jenis_kelamin')->insert([
                'nama' => $nama,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
