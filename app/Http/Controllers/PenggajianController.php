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
            'Tanggal'           => 'required',
            'NIK'               => 'required',
            'gaji_bulan'        => 'required',
            'tahun'             => 'required',
            'JmlHariEfektif'    => 'required',
            'JmlHariKerja'      => 'required',
            'JmlJamLembur'      => 'required',
            'GAPOK'             => 'required',
            'TJab'              => 'required',
            'TKomparatif'       => 'required',
            'TTransport'        => 'required',
            'PremiKesehatan'    => 'required',
            'Bonus'             => 'required',
            'TJamsostek'        => 'required',
            'TMasaKerja'        => 'required',
            'TLain'             => 'required',
            'UangLembur'        => 'required',
            'GajiBruto'         => 'required',
            'Kasbon'            => 'required',
            'SaldoUtang'        => 'required',
            'AngsuranMin'       => 'required',
            'AngsuranTambahan'  => 'required',
            'BungaAngsuran'      => 'required',
            'PPph21'             => 'required',
            'PJAMSOSTEK'        => 'required',
            'PKoperasi'         => 'required',
            'PPensiun'          => 'required',
            'PTerlambat'        => 'required',
            'PLain'             => 'required',
            'TotalPotongan'     => 'required',
            'TotalGaji'         => 'required',
            'Rounded'           => 'required',
            'Pajak'             => 'required',
            'NettGaji'          => 'required',
            'Note'              => 'nullable',
            'Posting'           => 'required',
            'Transfer'          => 'required',
            'rekGaji'           => 'nullable' ,
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Tanggal'           => 'required',
            'Bulan'             => 'required',
            'Tahun'             => 'required',
            'NIK'               => 'required',
            'Departement'       => 'required',
            'Jabatan'           => 'required',
            'StatusGaji'        => 'required',
            'JmlHariEfektif'    => 'required',
            'JmlHariKerja'      => 'required',
            'JmlJamLembur'      => 'required',
            'GAPOK'             => 'required',
            'TJab'              => 'required',
            'TKomparatif'       => 'required',
            'TTransport'        => 'required',
            'Bonus'             => 'required',
            'TJamsostek'        => 'required',
            'TMasaKerja'        => 'required',
            'TLain'             => 'required',
            'UangLembur'        => 'required',
            'GajiBruto'         => 'required',
            'Kasbon'            => 'required',
            'AngsuranMin'       => 'required',
            'AngsuranTambahan'  => 'required',
            'BungaAngsuran'     => 'required',
            'PPph21'            => 'required',
            'PJAMSOSTEK'        => 'required',
            'PKoperasi'         => 'required',
            'PPensiun'          => 'required',
            'PTerlambat'        => 'required',
            'PLain'             => 'required',
            'TotalPotongan'     => 'required',
            'TotalGaji'         => 'required',
            'Rounded'           => 'required',
            'Pajak'             => 'required',
            'NettGaji'          => 'required',
            'Note'              => 'nullable',
            'Posting'           => 'required',
            'Transfer'          => 'required',
            'rekGaji'           => 'nullable' ,
            'rekbyrpiutang'     => 'nullable',
            'rekbungapiutang'   => 'nullable',
            'rek'               => 'nullable',
            'pjkm'              => 'nullable',
        ]);

        $Penggajian = Penggajian::where('kdGaij', $id)->update($validatedData);

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
        $Penggajian = Penggajian::where('kdGaij', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data Penggajian berhasil dihapus']);
    }
}
