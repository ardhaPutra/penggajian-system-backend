<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;

    protected $table = 'tabel_penggajian';

    protected $fillable = [
        'Tanggal',
        'NIK',
        'gaji_bulan',
        'tahun',
        'JmlHariEfektif',
        'JmlHariKerja',
        'JmlJamLembur',
        'GAPOK',
        'TJab',
        'TKomparatif',
        'TTransport',
        'PremiKesehatan',
        'Bonus',
        'TJamsostek',
        'TMasaKerja',
        'TLain',
        'UangLembur',
        'GajiBruto',
        'Kasbon',
        'AngsuranMin',
        'AngsuranTambahan',
        'BungaAngsuran',
        'PPph21',
        'PJAMSOSTEK',
        'PKoperasi',
        'PPensiun',
        'PTerlambat',
        'PLain',
        'TotalPotongan',
        'TotalGaji',
        'Rounded',
        'Pajak',
        'NettGaji',
        'Note',
        'Posting',
        'Transfer',
        'rekGaji',
        'rekbyrpiutang',
        'rekbungapiutang',
        'rek',
        'pjkm',
        'deleted_at',
    ];

}
