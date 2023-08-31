<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;

class UangSaku extends Model
{
    use HasFactory;

    protected $table = 'tabel_uang_saku';

    protected $fillable = [
        'NIK',
        'Tanggal',
        'jmlharikerja',
        'jmltransport',
        'jmluangsaku',
        'totalterima',
        'note',
        'deleted_at',
    ];

    public static function fetchWithDetails()
    {
        return self::select(
            'tabel_uang_saku.*',
            'tabel_karyawan.nmKar as nama_karyawan',
        )
        ->leftJoin('tabel_karyawan', 'tabel_uang_saku.NIK', '=','tabel_karyawan.NIK')
        ->whereNull('tabel_uang_saku.deleted_at')
        ->orderByDesc('tabel_uang_saku.created_at');
    }

    public static function joinKaryawanDepartemenJabatan()
    {
        return Karyawan::select(
            'tabel_karyawan.*',
            'tabel_departemen.nm as nama_departemen',
            'tabel_jabatan.nm as nama_jabatan'
        )
        ->leftJoin('tabel_departemen', 'tabel_karyawan.kdDep', '=', 'tabel_departemen.pk')
        ->leftJoin('tabel_jabatan', 'tabel_karyawan.kdJab', '=', 'tabel_jabatan.pk')
        ->orderByDesc('tabel_karyawan.created_at');
    }
}
