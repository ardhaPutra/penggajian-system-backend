<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;

    protected $table = 'tabel_karyawan';

    protected $fillable = [
        'tanggal',
        'bulan',
        'tahun',
        'nik',
        'department',
        'jabatan',
        'statusgaji',
        'jmlhariefektif',
        'jmlharikerja',
        'jmljamlembur',
        'gapok',
        'tjab',
        'tkomparatif',
        'ttransport',
        'bonus',
        'tjamsostek',
        'tmasakerja',
        'tlain',
        'uanglembur',
        'gajibruto',
        'kasbon',
        'saldoutang',
        'angsuranmin',
        'angsurantambahan',
        'bungangsuran',
        'pph21',
        'pjamsostek',
        'pKoperasi',
        'ppensiun',
        'pterlambat',
        'plain',
        'totalpotongan',
        'totalgaji',
        'rounded',
        'pajak',
        'nettgaji',
        'note',
        'posting',
        'transfer',
        'rekgaji',
        'rekbyrpiutang',
        'rekbungapiutang',
        'rek',
        'pjkm',
    ];
}
