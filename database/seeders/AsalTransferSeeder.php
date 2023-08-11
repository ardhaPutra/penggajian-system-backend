<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AsalTransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar nama asal transfer yang bisa dipilih
        $asalTransfer = [
            'KAS',
            'KOPERASI',
            'BANK BCA',
            'BANK BRI',
            'BANK MANDIRI',
            'BANK BNI'
        ];

        // Loop melalui daftar nama asal transfer
        foreach ($asalTransfer as $nama) {
            DB::table('tabel_asal_transfer')->insert([
                'nama' => $nama,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
