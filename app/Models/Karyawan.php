<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'tabel_karyawan';

    protected $fillable = [
        'NIK',
        'nmKar',
        'Sex',
        'tglmsk',
        'tglkeluar',
        'almt',
        'kdkota',
        'kdprovinsi',
        'kdnegara',
        'tlp',
        'statusKar',
        'awalKontrak',
        'akhirKontrak',
        'noSuratKontrak',
        'kdDep',
        'kdJab',
        'kdGol',
        'sisaCuti',
        'statusTransfer',
        'noRek',
        'bank',
        'atasnama',
        'npwp',
        'gapok',
        'tjab',
        'tKomparatif',
        'pJamsostek',
        'pKoperasi',
        'statusGaji',
        'almtAsal',
        'tmpLahir',
        'tglLahir',
        'kdagama',
        'statusNikah',
        'statusSuami',
        'jmlIstri',
        'jmlAnak',
        'pendidikan',
        'aktif',
        'note',
        'foto',
        'deleted_at',
    ];
}
