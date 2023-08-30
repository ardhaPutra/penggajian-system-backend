<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'tabel_karyawan';

    protected $dates = ['deleted_at'];

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
        'noRek',
        'bank',
        'atasnama',
        'npwp',
        'gapok',
        'tKomparatif',
        'pJamsostek',
        'pKoperasi',
        'statusGaji',
        'almtAsal',
        'tmpLahir',
        'tglLahir',
        'kdagama',
        'statusNikah',
        'jmlIstri',
        'jmlAnak',
        'pendidikan',
        'aktif',
        'note',
        'foto',
        'deleted_at',
    ];

    public static function fetchWithDetails()
    {
        return self::select(
            'tabel_karyawan.*',
            'tabel_jenis_kelamin.nama as jenis_kelamin',
            'tabel_negara.nm as negara',
            'tabel_provinsi.nm as provinsi',
            'tabel_kota.nm as kota',
            'tabel_status_pegawai.nama as status_karyawan',
            'tabel_jabatan.nm as jabatan',
            'tabel_golongan.nm as golongan',
            'tabel_status_gaji.nama as status_gaji',
            'tabel_agama.nama as agama',
            'tabel_status_perkawinan.nama as status_perkawinan',
            'tabel_pendidikan.nm as nama_pendidikan',
        )
        ->leftJoin('tabel_jenis_kelamin', 'tabel_karyawan.Sex', '=','tabel_jenis_kelamin.id')
        ->leftJoin('tabel_negara', 'tabel_karyawan.kdnegara', '=', 'tabel_negara.pk')
        ->leftJoin('tabel_provinsi', 'tabel_karyawan.kdprovinsi', '=', 'tabel_provinsi.pk')
        ->leftJoin('tabel_kota', 'tabel_karyawan.kdkota', '=', 'tabel_kota.pk')
        ->leftJoin('tabel_status_pegawai', 'tabel_karyawan.statusKar', '=', 'tabel_status_pegawai.id')
        ->leftJoin('tabel_departemen', 'tabel_karyawan.kdDep', '=', 'tabel_departemen.pk')
        ->leftJoin('tabel_jabatan', 'tabel_karyawan.kdJab', '=', 'tabel_jabatan.pk')
        ->leftJoin('tabel_golongan', 'tabel_karyawan.kdGol', '=', 'tabel_golongan.pk')
        ->leftJoin('tabel_status_gaji', 'tabel_karyawan.statusGaji', '=', 'tabel_status_gaji.id')
        ->leftJoin('tabel_agama', 'tabel_karyawan.kdagama', '=', 'tabel_agama.id')
        ->leftJoin('tabel_status_perkawinan', 'tabel_karyawan.statusNikah', '=', 'tabel_status_perkawinan.id')
        ->leftJoin('tabel_pendidikan', 'tabel_karyawan.pendidikan', '=', 'tabel_pendidikan.pk')
        ->whereNull('tabel_karyawan.deleted_at')
        ->orderByDesc('tabel_karyawan.created_at');
    }

    public function storeData($request)
    {
        try {
            // Update foto ke dalam storage Laravel
            if ($request->hasFile('foto')) {
                $oldFotoPath = public_path('foto_karyawan/' . basename($this->foto));

                // Delete the old photo if it exists
                if ($this->foto && file_exists($oldFotoPath)) {
                    unlink($oldFotoPath);
                }

                $foto = $request->file('foto');
                $fotoPath = 'foto_karyawan/' . $foto->getClientOriginalName();
                $foto->move(public_path('foto_karyawan'), $foto->getClientOriginalName());
                $validatedData['foto'] = asset('/' . $fotoPath);
            }

            $this->NIK              = $request->NIK;
            $this->nmKar            = $request->nmKar;
            $this->Sex              = $request->Sex;
            $this->almt             = $request->almt;
            $this->kdkota           = $request->kdkota;
            $this->kdprovinsi       = $request->kdprovinsi;
            $this->kdnegara         = $request->kdnegara;
            $this->tlp              = $request->tlp;
            $this->statusKar        = $request->statusKar;
            $this->kdDep            = $request->kdDep;
            $this->kdJab            = $request->kdJab;
            $this->gapok            = $request->gapok;
            $this->statusGaji       = $request->statusGaji;
            $this->almtAsal         = $request->almtAsal;
            $this->tmpLahir         = $request->tmpLahir;
            $this->tglLahir         = $request->tglLahir;
            $this->kdagama          = $request->kdagama;
            $this->statusNikah      = $request->statusNikah;
            $this->pendidikan       = $request->pendidikan;
            $this->aktif            = $request->aktif;
            $this->bank             = $request->bank;
            $this->tglmsk           = $request->input('tglmsk') !== 'null' ? $request->input('tglmsk') : $this->tglmsk;
            $this->tglkeluar        = $request->input('tglkeluar') !== 'null' ? $request->input('tglkeluar') : $this->tglkeluar;
            $this->awalKontrak      = $request->input('awalKontrak') !== 'null' ? $request->input('awalKontrak') : $this->awalKontrak;
            $this->akhirKontrak     = $request->input('akhirKontrak') !== 'null' ? $request->input('akhirKontrak') : $this->akhirKontrak;
            $this->noSuratKontrak   = $request->noSuratKontrak;
            $this->noRek            = $request->noRek;
            $this->atasnama         = $request->atasnama;
            $this->kdGol            = $request->kdGol;
            $this->npwp             = $request->npwp;
            $this->tKomparatif      = $request->tKomparatif;
            $this->pJamsostek       = $request->pJamsostek;
            $this->pKoperasi        = $request->pKoperasi;
            $this->jmlIstri         = $request->jmlIstri;
            $this->jmlAnak          = $request->jmlAnak;
            $this->note             = $request->note;
            $this->foto             = $validatedData['foto'];
            $this->save();

            return [
                'message' => 'Data Karyawan berhasil disimpan',
                'data' => $this,
            ];

        } catch (\Exception $error) {
            return [
                'message' => 'Terjadi kesalahan saat menyimpan data karyawan.',
                'error' => $error->getMessage(),
            ];
        }
    }

    public function updateData($request)
    {
         try {
            // Update foto ke dalam storage Laravel
            if ($request->hasFile('foto')) {
                $oldFotoPath = public_path('foto_karyawan/' . basename($this->foto));

                // Delete the old photo if it exists
                if ($this->foto && file_exists($oldFotoPath)) {
                    unlink($oldFotoPath);
                }

                $foto = $request->file('foto');
                $fotoPath = 'foto_karyawan/' . $foto->getClientOriginalName();
                $foto->move(public_path('foto_karyawan'), $foto->getClientOriginalName());
                $this->foto = asset('/' . $fotoPath);
            }

            $this->NIK              = $request->NIK;
            $this->nmKar            = $request->nmKar;
            $this->Sex              = $request->Sex;
            $this->almt             = $request->almt;
            $this->kdkota           = $request->kdkota;
            $this->kdprovinsi       = $request->kdprovinsi;
            $this->kdnegara         = $request->kdnegara;
            $this->tlp              = $request->tlp;
            $this->statusKar        = $request->statusKar;
            $this->kdDep            = $request->kdDep;
            $this->kdJab            = $request->kdJab;
            $this->gapok            = $request->gapok;
            $this->statusGaji       = $request->statusGaji;
            $this->almtAsal         = $request->almtAsal;
            $this->tmpLahir         = $request->tmpLahir;
            $this->tglLahir         = $request->tglLahir;
            $this->kdagama          = $request->kdagama;
            $this->statusNikah      = $request->statusNikah;
            $this->pendidikan       = $request->pendidikan;
            $this->aktif            = $request->aktif;
            $this->bank             = $request->bank;
            $this->tglmsk           = $request->input('tglmsk') !== 'null' ? $request->input('tglmsk') : $this->tglmsk;
            $this->tglkeluar        = $request->input('tglkeluar') !== 'null' ? $request->input('tglkeluar') : $this->tglkeluar;
            $this->awalKontrak      = $request->input('awalKontrak') !== 'null' ? $request->input('awalKontrak') : $this->awalKontrak;
            $this->akhirKontrak     = $request->input('akhirKontrak') !== 'null' ? $request->input('akhirKontrak') : $this->akhirKontrak;
            $this->noSuratKontrak   = $request->noSuratKontrak;
            $this->noRek            = $request->noRek;
            $this->atasnama         = $request->atasnama;
            $this->kdGol            = $request->kdGol;
            $this->npwp             = $request->npwp;
            $this->tKomparatif      = $request->tKomparatif;
            $this->pJamsostek       = $request->pJamsostek;
            $this->pKoperasi        = $request->pKoperasi;
            $this->jmlIstri         = $request->jmlIstri;
            $this->jmlAnak          = $request->jmlAnak;
            $this->note             = $request->note;
            $this->update();

            return response()->json([
                'message' => 'Data Karyawan berhasil diupdate',
                'data' => $this,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat mengupdate data karyawan.',
                'error' => $error->getMessage(),
            ], 500);
        }
    }

    public function deleteData()
    {
        try {
            if ($this->foto) {
                $oldFotoPath = public_path('foto_karyawan/' . basename($this->foto));

                if (file_exists($oldFotoPath)) {
                    unlink($oldFotoPath);
                }
            }

            $this->foto = null;
            $this->update(['deleted_at' => now()]);

            return ['message' => 'Data Karyawan berhasil dihapus'];

        } catch (\Exception $error) {
            return [
                'message' => 'Terjadi kesalahan saat delete data karyawan.',
                'error' => $error->getMessage(),
            ];
        }
    }
}
