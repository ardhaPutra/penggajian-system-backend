<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Penggajian::whereNull('deleted_at')
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
            'bulan'             => 'required',
            'tahun'             => 'required',
            'nik'               => 'required',
            'department'        => 'required',
            'jabatan'           => 'required',
            'statusgaji'        => 'required',
            'jmlhariefektif'    => 'required',
            'jmlharikerja'      => 'required',
            'jmljamlembur'      => 'required',
            'gapok'             => 'required',
            'tjab'              => 'required',
            'tkomparatif'       => 'required',
            'ttransport'        => 'required',
            'bonus'             => 'required',
            'tjamsostek'        => 'required',
            'tmasakerja'        => 'required',
            'tlain'             => 'required',
            'uanglembur'        => 'required',
            'gajibruto'         => 'required',
            'kasbon'            => 'required',
            'saldoutang'        => 'required',
            'angsuranmin'       => 'required',
            'angsurantambahan'  => 'required',
            'bungangsuran'      => 'required',
            'pph21'             => 'required',
            'pjamsostek'        => 'required',
            'pKoperasi'         => 'required',
            'ppensiun'          => 'required',
            'pterlambat'        => 'required',
            'plain'             => 'required',
            'totalpotongan'     => 'required',
            'totalgaji'         => 'required',
            'rounded'           => 'required',
            'pajak'             => 'required',
            'nettgaji'          => 'required',
            'note'              => 'nullable',
            'posting'           => 'required',
            'transfer'          => 'required',
            'rekgaji'           => 'nullable' ,
            'rekbyrpiutang'     => 'nullable',
            'rekbungapiutang'   => 'nullable',
            'rek'               => 'nullable',
            'pjkm'              => 'nullable',
        ]);

        // Simpan data ke database menggunakan metode create dari model Penggajian
        $Penggajian = Penggajian::create($validatedData);

        return response()->json([
            'message' => 'Data Penggajian berhasil disimpan',
            'data' => $Penggajian,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Penggajian $penggajian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penggajian $penggajian)
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
            'bulan'             => 'required',
            'tahun'             => 'required',
            'nik'               => 'required',
            'department'        => 'required',
            'jabatan'           => 'required',
            'statusgaji'        => 'required',
            'jmlhariefektif'    => 'required',
            'jmlharikerja'      => 'required',
            'jmljamlembur'      => 'required',
            'gapok'             => 'required',
            'tjab'              => 'required',
            'tkomparatif'       => 'required',
            'ttransport'        => 'required',
            'bonus'             => 'required',
            'tjamsostek'        => 'required',
            'tmasakerja'        => 'required',
            'tlain'             => 'required',
            'uanglembur'        => 'required',
            'gajibruto'         => 'required',
            'kasbon'            => 'required',
            'saldoutang'        => 'required',
            'angsuranmin'       => 'required',
            'angsurantambahan'  => 'required',
            'bungangsuran'      => 'required',
            'pph21'             => 'required',
            'pjamsostek'        => 'required',
            'pKoperasi'         => 'required',
            'ppensiun'          => 'required',
            'pterlambat'        => 'required',
            'plain'             => 'required',
            'totalpotongan'     => 'required',
            'totalgaji'         => 'required',
            'rounded'           => 'required',
            'pajak'             => 'required',
            'nettgaji'          => 'required',
            'note'              => 'nullable',
            'posting'           => 'required',
            'transfer'          => 'required',
            'rekgaji'           => 'nullable' ,
            'rekbyrpiutang'     => 'nullable',
            'rekbungapiutang'   => 'nullable',
            'rek'               => 'nullable',
            'pjkm'              => 'nullable',
        ]);

        $Penggajian = Penggajian::where('kdcabang', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data Penggajian berhasil diupdate',
            'data' => $Penggajian,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Penggajian = Penggajian::where('kdcabang', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data Penggajian berhasil dihapus']);
    }
}
