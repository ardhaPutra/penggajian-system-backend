<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'tabel_peminjaman';

    protected $fillable = [
        'kccabang',
        'kdPjm',
        'Tanggal',
        'NIK',
        'MaxPeminjaman',
        'JmlPeminjaman',
        'SaldoPiutang',
        'sukubunga',
        'maxAngsuran',
        'TotalPiutang',
        'note',
        'KasbonFlag',
        'posting',
        'rekpinjam',
        'transfer',
        'akunkas',
        'useradd',
        'dateadd',
        'useredit',
        'dateedit',
    ];
}
