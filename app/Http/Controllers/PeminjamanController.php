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
        return Peminjaman::whereNull('deleted_at')
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
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
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
        $Peminjaman = Peminjaman::where('kdpjm', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data Peminjaman berhasil dihapus']);
    }
}
