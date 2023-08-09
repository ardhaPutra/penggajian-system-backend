<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Absensi::whereNull('deleted_at')
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
            'tanggal'           => 'required',
            'nik'               => 'required',
            'kdcabang'          => 'required',
            'jammasuk'          => 'required',
            'jamkeluar'         => 'required',
            'jmljamkerja'       => 'required',
            'jmljamlembur'      => 'required',
            'ijin'              => 'nullable',
            'alpa'              => 'nullable',
            'sakit'             => 'nullable',
            'terlambat'         => 'nullable',
            'potuangsaku'       => 'required',
            'status'            => 'required',
            'ket'               => 'nullable',
            'halfdayflag'       => 'required',
            'lemburharilibur'   => 'required',
            'koordinat'         => 'nullable',
        ]);

        $Absensi = Absensi::where('kdAbsen', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data Absensi berhasil diupdate',
            'data' => $Absensi,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal'           => 'required',
            'nik'               => 'required',
            'kdcabang'          => 'required',
            'jammasuk'          => 'required',
            'jamkeluar'         => 'required',
            'jmljamkerja'       => 'required',
            'jmljamlembur'      => 'required',
            'ijin'              => 'nullable',
            'alpa'              => 'nullable',
            'sakit'             => 'nullable',
            'terlambat'         => 'nullable',
            'potuangsaku'       => 'required',
            'status'            => 'required',
            'ket'               => 'nullable',
            'halfdayflag'       => 'required',
            'lemburharilibur'   => 'required',
            'koordinat'         => 'nullable',
        ]);

        // Simpan data ke database menggunakan metode create dari model Absensi
        $Absensi = Absensi::create($validatedData);

        return response()->json([
            'message' => 'Data Absensi berhasil disimpan',
            'data' => $Absensi,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Absensi = Absensi::where('kdAbsen', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data Absensi berhasil dihapus']);
    }
}
