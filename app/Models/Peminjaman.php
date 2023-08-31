<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'tabel_pinjaman_dan_kasbon';

    protected $fillable = [
        'Tanggal',
        'NIK',
        'MaxPeminjaman',
        'JmlPeminjaman',
        'SaldoPiutang',
        'sukubunga',
        'maxAngsuran',
        'totalPiutang',
        'note',
        'deleted_at',
    ];

    public static function fetchWithDetails()
    {
        return self::select(
            'tabel_pinjaman_dan_kasbon.*',
            'tabel_karyawan.nmKar as nama_karyawan',
        )
        ->leftJoin('tabel_karyawan', 'tabel_pinjaman_dan_kasbon.NIK', '=','tabel_karyawan.NIK')
        ->whereNull('tabel_pinjaman_dan_kasbon.deleted_at')
        ->orderByDesc('tabel_pinjaman_dan_kasbon.created_at');
    }

    public function deleteData()
    {
        try {
            $this->update(['deleted_at' => now()]);

            return ['message' => 'Data Pinjaman dan Kasbon berhasil dihapus'];

        } catch (\Exception $error) {
            return [
                'message' => 'Terjadi kesalahan saat delete data Pinjaman dan Kasbon.',
                'error' => $error->getMessage(),
            ];
        }
    }
}
