<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'tabel_absensi';

    protected $fillable = [
        'tanggal',
        'nik',
        'kdcabang',
        'jammasuk',
        'jamkeluar',
        'jmljamkerja',
        'jmljamlembur',
        'ijin',
        'alpa',
        'sakit',
        'terlambat',
        'potuangsaku',
        'status',
        'ket',
        'halfdayflag',
        'lemburharilibur',
        'koordinat',
    ];
}
