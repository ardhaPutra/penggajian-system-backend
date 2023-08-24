<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Karyawan::select(
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
            'tabel_status_pekerjaan_suami_istri.nama as status_pekerjaan_pasutri',
            'tabel_pendidikan.nm as pendidikan',
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
        ->leftJoin('tabel_status_pekerjaan_suami_istri', 'tabel_karyawan.statusSuami', '=', 'tabel_status_pekerjaan_suami_istri.id')
        ->leftJoin('tabel_pendidikan', 'tabel_karyawan.statusSuami', '=', 'tabel_pendidikan.pk')
        ->whereNull('tabel_karyawan.deleted_at')
        ->orderBy('tabel_karyawan.created_at', 'desc')
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK'               => 'required',
            'nmKar'             => 'required',
            'Sex'               => 'required',
            'almt'              => 'required',
            'kdkota'            => 'required',
            'kdprovinsi'        => 'required',
            'kdnegara'          => 'required',
            'tlp'               => 'required',
            'statusKar'         => 'required',
            'kdDep'             => 'required',
            'kdJab'             => 'required',
            'gapok'             => 'required',
            'statusGaji'        => 'required',
            'almtAsal'          => 'required',
            'tmpLahir'          => 'required',
            'tglLahir'          => 'required',
            'kdagama'           => 'required',
            'statusNikah'       => 'required',
            'pendidikan'        => 'required',
            'aktif'             => 'required',
        ]);

         // Simpan foto ke dalam storage Laravel
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = 'foto_karyawan/' . $foto->getClientOriginalName();
            $foto->move(public_path('foto_karyawan'), $foto->getClientOriginalName());
            $validatedData['foto'] = asset('/' . $fotoPath);
        }

        $Karyawan                   = new Karyawan();
        $Karyawan->NIK              = $request->NIK;
        $Karyawan->nmKar            = $request->nmKar;
        $Karyawan->Sex              = $request->Sex;
        $Karyawan->almt             = $request->almt;
        $Karyawan->kdkota           = $request->kdkota;
        $Karyawan->kdprovinsi       = $request->kdprovinsi;
        $Karyawan->kdnegara         = $request->kdnegara;
        $Karyawan->tlp              = $request->tlp;
        $Karyawan->statusKar              = $request->statusKar;
        $Karyawan->kdDep              = $request->kdDep;
        $Karyawan->kdJab              = $request->kdJab;
        $Karyawan->gapok              = $request->gapok;
        $Karyawan->statusGaji              = $request->statusGaji;
        $Karyawan->almtAsal              = $request->almtAsal;
        $Karyawan->tmpLahir              = $request->tmpLahir;
        $Karyawan->tglLahir              = $request->tglLahir;
        $Karyawan->kdagama              = $request->kdagama;
        $Karyawan->statusNikah              = $request->statusNikah;
        $Karyawan->pendidikan              = $request->pendidikan;
        $Karyawan->aktif              = $request->aktif;
        $Karyawan->tglmsk           = $request->input('tglmsk') !== 'null' ? $request->input('tglmsk') : $Karyawan->tglmsk;
        $Karyawan->tglkeluar        = $request->input('tglkeluar') !== 'null' ? $request->input('tglkeluar') : $Karyawan->tglkeluar;
        $Karyawan->awalKontrak      = $request->input('awalKontrak') !== 'null' ? $request->input('awalKontrak') : $Karyawan->awalKontrak;
        $Karyawan->akhirKontrak     = $request->input('akhirKontrak') !== 'null' ? $request->input('akhirKontrak') : $Karyawan->akhirKontrak;
        $Karyawan->noSuratKontrak   = $request->input('noSuratKontrak') !== 'null' ? $request->input('noSuratKontrak') : $Karyawan->noSuratKontrak;
        $Karyawan->noRek            = $request->input('noRek') !== 'null' ? $request->input('noRek') : $Karyawan->noRek;
        $Karyawan->bank             = $request->input('bank') !== 'null' ? $request->input('bank') : $Karyawan->bank;
        $Karyawan->atasnama         = $request->input('atasnama') !== 'null' ? $request->input('atasnama') : $Karyawan->atasnama;
        $Karyawan->kdGol            = $request->input('kdGol') !== 'null' ? $request->input('kdGol') : $Karyawan->kdGol;
        $Karyawan->npwp             = $request->input('npwp') !== 'null' ? $request->input('npwp') : $Karyawan->npwp;
        $Karyawan->tJab             = $request->input('tJab') !== 'null' ? $request->input('tJab') : $Karyawan->tJab;
        $Karyawan->tKomparatif      = $request->input('tKomparatif') !== 'null' ? $request->input('tKomparatif') : $Karyawan->tKomparatif;
        $Karyawan->pJamsostek       = $request->input('pJamsostek') !== 'null' ? $request->input('pJamsostek') : $Karyawan->pJamsostek;
        $Karyawan->pKoperasi        = $request->input('pKoperasi') !== 'null' ? $request->input('pKoperasi') : $Karyawan->pKoperasi;
        $Karyawan->statusSuami      = $request->input('statusSuami') !== 'null' ? $request->input('statusSuami') : $Karyawan->statusSuami;
        $Karyawan->jmlIstri         = $request->input('jmlIstri') !== 'null' ? $request->input('jmlIstri') : $Karyawan->jmlIstri;
        $Karyawan->jmlAnak          = $request->input('jmlAnak') !== 'null' ? $request->input('jmlAnak') : $Karyawan->jmlAnak;
        $Karyawan->note             = $request->input('note') !== 'null' ? $request->input('note') : $Karyawan->note;
        $Karyawan->foto             = $validatedData['foto'];
        // Simpan data ke database menggunakan metode create dari model Karyawan
        $Karyawan->save($validatedData);

        return response()->json([
            'message' => 'Data Karyawan berhasil disimpan',
            'data' => $Karyawan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'NIK'               => 'required',
            'nmKar'             => 'required',
            'Sex'               => 'required',
            'almt'              => 'required',
            'kdkota'            => 'required',
            'kdprovinsi'        => 'required',
            'kdnegara'          => 'required',
            'tlp'               => 'required',
            'statusKar'         => 'required',
            'kdDep'             => 'required',
            'kdJab'             => 'required',
            'gapok'             => 'required',
            'statusGaji'        => 'required',
            'almtAsal'          => 'required',
            'tmpLahir'          => 'required',
            'tglLahir'          => 'required',
            'kdagama'           => 'required',
            'statusNikah'       => 'required',
            'pendidikan'        => 'required',
            'aktif'             => 'required',
        ]);

        $Karyawan                   = Karyawan::find($id);

        $Karyawan->tglmsk           = $request->input('tglmsk') !== 'null' ? $request->input('tglmsk') : $Karyawan->tglmsk;
        $Karyawan->tglkeluar        = $request->input('tglkeluar') !== 'null' ? $request->input('tglkeluar') : $Karyawan->tglkeluar;
        $Karyawan->awalKontrak      = $request->input('awalKontrak') !== 'null' ? $request->input('awalKontrak') : $Karyawan->awalKontrak;
        $Karyawan->akhirKontrak     = $request->input('akhirKontrak') !== 'null' ? $request->input('akhirKontrak') : $Karyawan->akhirKontrak;
        $Karyawan->noSuratKontrak   = $request->input('noSuratKontrak') !== 'null' ? $request->input('noSuratKontrak') : $Karyawan->noSuratKontrak;
        $Karyawan->noRek            = $request->input('noRek') !== 'null' ? $request->input('noRek') : $Karyawan->noRek;
        $Karyawan->bank             = $request->input('bank') !== 'null' ? $request->input('bank') : $Karyawan->bank;
        $Karyawan->atasnama         = $request->input('atasnama') !== 'null' ? $request->input('atasnama') : $Karyawan->atasnama;
        $Karyawan->kdGol            = $request->input('kdGol') !== 'null' ? $request->input('kdGol') : $Karyawan->kdGol;
        $Karyawan->npwp             = $request->input('npwp') !== 'null' ? $request->input('npwp') : $Karyawan->npwp;
        $Karyawan->tJab             = $request->input('tJab') !== 'null' ? $request->input('tJab') : $Karyawan->tJab;
        $Karyawan->tKomparatif      = $request->input('tKomparatif') !== 'null' ? $request->input('tKomparatif') : $Karyawan->tKomparatif;
        $Karyawan->pJamsostek       = $request->input('pJamsostek') !== 'null' ? $request->input('pJamsostek') : $Karyawan->pJamsostek;
        $Karyawan->pKoperasi        = $request->input('pKoperasi') !== 'null' ? $request->input('pKoperasi') : $Karyawan->pKoperasi;
        $Karyawan->statusSuami      = $request->input('statusSuami') !== 'null' ? $request->input('statusSuami') : $Karyawan->statusSuami;
        $Karyawan->jmlIstri         = $request->input('jmlIstri') !== 'null' ? $request->input('jmlIstri') : $Karyawan->jmlIstri;
        $Karyawan->jmlAnak          = $request->input('jmlAnak') !== 'null' ? $request->input('jmlAnak') : $Karyawan->jmlAnak;
        $Karyawan->note             = $request->input('note') !== 'null' ? $request->input('note') : $Karyawan->note;

        // Update foto ke dalam storage Laravel
        if ($request->hasFile('foto')) {
            $oldFotoPath = public_path('foto_karyawan/' . basename($Karyawan->foto));

            // Delete the old photo if it exists
            if ($Karyawan->foto && file_exists($oldFotoPath)) {
                unlink($oldFotoPath);
            }

            $foto = $request->file('foto');
            $fotoPath = 'foto_karyawan/' . $foto->getClientOriginalName();
            $foto->move(public_path('foto_karyawan'), $foto->getClientOriginalName());
            $validatedData['foto'] = asset('/' . $fotoPath);
        }

        // Update other fields
        $Karyawan->update($validatedData);

        return response()->json([
            'message' => 'Data Karyawan berhasil diupdate',
            'data' => $Karyawan,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Karyawan = Karyawan::find($id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data Karyawan berhasil dihapus']);
    }
}
