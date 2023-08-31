<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjamankasbonList = Peminjaman::fetchWithDetails()->get();

        return $pinjamankasbonList;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal'       => 'required',
            'nik'           => 'required|max:50',
            'maxpeminjaman' => 'required',
            'jmlpeminjaman' => 'required',
            'saldopiutang'  => 'required',
            'sukubunga'     => 'required',
            'maxangsuran'   => 'required',
            'totalpiutang'  => 'required',
            'note'          => 'nullable|string',
            'kasbonflag'    => 'required',
            'posting'       => 'required',
            'rekpinjam'     => 'nullable|string',
            'transfer'      => 'nullable',
            'akunkas'       => 'nullable',
        ]);

        // Simpan data ke database menggunakan metode create dari model Peminjaman
        $Peminjaman = Peminjaman::create($validatedData);

        return response()->json([
            'message' => 'Data Peminjaman berhasil disimpan',
            'data' => $Peminjaman,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal'       => 'required',
            'nik'           => 'required|max:50',
            'maxpeminjaman' => 'required',
            'jmlpeminjaman' => 'required',
            'saldopiutang'  => 'required',
            'sukubunga'     => 'required',
            'maxangsuran'   => 'required',
            'totalpiutang'  => 'required',
            'note'          => 'nullable|string',
            'kasbonflag'    => 'required',
            'posting'       => 'required',
            'rekpinjam'     => 'nullable|string',
            'transfer'      => 'nullable',
            'akunkas'       => 'nullable',
        ]);

        $Peminjaman = Peminjaman::where('kdpjm', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data Peminjaman berhasil diupdate',
            'data' => $Peminjaman,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $peminjaman   = Peminjaman::findOrFail($id);
        $result       = $peminjaman->deleteData();

        return response()->json($result);
    }
}
