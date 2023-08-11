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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'tglmsk'            => 'required',
            'tglkeluar'         => 'required',
            'almt'              => 'required',
            'kdkota'            => 'required',
            'kdprovinsi'        => 'required',
            'kdnegara'          => 'required',
            'tlp'               => 'required',
            'statusKar'         => 'required',
            'awalKontrak'       => 'required',
            'akhirKontrak'      => 'required',
            'noSuratKontrak'    => 'required',
            'kdDep'             => 'required',
            'kdJab'             => 'required',
            'kdGol'             => 'required',
            'sisaCuti'          => 'required',
            'statusTransfer'    => 'required',
            'noRek'             => 'required',
            'bank'              => 'required',
            'atasnama'          => 'required',
            'npwp'              => 'required',
            'gapok'             => 'required',
            'tJab'              => 'required',
            'tKomparatif'       => 'required',
            'pJamsostek'        => 'required',
            'pKoperasi'         => 'required',
            'statusGaji'        => 'required',
            'defUS'             => 'required',
            'pensiun'           => 'required',
            'potpensin'         => 'required',
            'salKasbon'         => 'required',
            'salHutang'         => 'required',
            'almtAsal'          => 'required',
            'tmpLahir'          => 'required',
            'tglLahir'          => 'required',
            'kdagama'           => 'required',
            'statusNikah'       => 'required',
            'statusSuami'       => 'nullable|string',
            'jmlIstri'          => 'nullable|string',
            'jmlAnak'           => 'nullable|string',
            'pendidikan'        => 'nullable|string',
            'aktif'             => 'required',
            'note'              => 'nullable|string',
            'foto'              => 'nullable|string',
            'ship'              => 'nullable|string',
        ]);

        // Simpan data ke database menggunakan metode create dari model Karyawan
        $Karyawan = Karyawan::create($validatedData);

        return response()->json([
            'message' => 'Data Karyawan berhasil disimpan',
            'data' => $Karyawan,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        //
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
            'tglmsk'            => 'required',
            'tglkeluar'         => 'required',
            'almt'              => 'required',
            'kdkota'            => 'required',
            'kdprovinsi'        => 'required',
            'kdnegara'          => 'required',
            'tlp'               => 'required',
            'statusKar'         => 'required',
            'awalKontrak'       => 'required',
            'akhirKontrak'      => 'required',
            'noSuratKontrak'    => 'required',
            'kdDep'             => 'required',
            'kdJab'             => 'required',
            'kdGol'             => 'required',
            'sisaCuti'          => 'required',
            'statusTransfer'    => 'required',
            'noRek'             => 'required',
            'bank'              => 'required',
            'atasnama'          => 'required',
            'npwp'              => 'required',
            'gapok'             => 'required',
            'tJab'              => 'required',
            'tKomparatif'       => 'required',
            'pJamsostek'        => 'required',
            'pKoperasi'         => 'required',
            'statusGaji'        => 'required',
            'defUS'             => 'required',
            'pensiun'           => 'required',
            'potpensin'         => 'required',
            'salKasbon'         => 'required',
            'salHutang'         => 'required',
            'almtAsal'          => 'required',
            'tmpLahir'          => 'required',
            'tglLahir'          => 'required',
            'kdagama'           => 'required',
            'statusNikah'       => 'required',
            'statusSuami'       => 'nullable|string',
            'jmlIstri'          => 'nullable|string',
            'jmlAnak'           => 'nullable|string',
            'pendidikan'        => 'nullable|string',
            'aktif'             => 'required',
            'note'              => 'nullable|string',
            'foto'              => 'nullable|string',
            'ship'              => 'nullable|string',
        ]);

        $Karyawan = Karyawan::where('kdcabang', $id)->update($validatedData);

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
        $Karyawan = Karyawan::where('kdcabang', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data Karyawan berhasil dihapus']);
    }
}
