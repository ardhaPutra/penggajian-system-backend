<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'tabel_karyawan';

    protected $primaryKey = 'kdcabang';

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
        'tJab',
        'tKomparatif',
        'pJamsostek',
        'pKoperasi',
        'statusGaji',
        'defUS',
        'pensiun',
        'potpensin',
        'salKasbon',
        'salHutang',
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
        'ship',
        'deleted_at',
    ];
}
