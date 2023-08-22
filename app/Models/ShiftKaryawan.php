<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftKaryawan extends Model
{
    use HasFactory;

    protected $table = 'tabel_shift_karyawan';

    protected $fillable = [
        'NIK',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu',
        'deleted_at',
    ];
}
