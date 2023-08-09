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
        return Karyawan::whereNull('deleted_at')
                ->orderBy('created_at', 'desc')
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
