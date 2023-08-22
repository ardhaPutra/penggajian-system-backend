<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangSaku extends Model
{
    use HasFactory;

    protected $table = 'tabel_uang_saku';

    protected $fillable = [
        'kdcabang',
        'kdus',
        'tanggal',
        'NIK',
        'JmlHariKerja',
        'usperhari',
        'uangsaku',
        'potongan',
        'totalterima',
        'rounded',
        'totaluangsaku',
        'note',
        'posting',
        'transfer',
        'rekus',
        'akunkas',
        'deleted_at',
    ];
}
