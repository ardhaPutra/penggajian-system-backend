<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TunjanganHariRaya extends Model
{
    use HasFactory;


    protected $table = 'tabel_tunjangan_hari_raya';

    protected $fillable = [
        'kdcabang',
        'kdTHR',
        'tanggal',
        'NIK',
        'JmlPeriodeTHR',
        'JmlHariKerja',
        'NilaiTHRPerPeriode',
        'NilaiTHR',
        'Rounded',
        'Pajak',
        'TotalNilaiTHR',
        'note',
        'status',
        'posting',
        'transfer',
        'rekTHR',
        'rekpph',
        'akunkas',
        'deleted_at',
    ];
}
