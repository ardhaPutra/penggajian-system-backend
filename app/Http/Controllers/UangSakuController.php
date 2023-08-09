<?php

namespace App\Http\Controllers;

use App\Models\UangSaku;
use Illuminate\Http\Request;

class UangSakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UangSaku::whereNull('deleted_at')
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
            'NIK'           => 'required',
            'JmlHariKerja'  => 'required',
            'usperhari'     => 'required',
            'uangsaku'      => 'required',
            'potongan'      => 'required',
            'totalterima'   => 'required',
            'rounded'       => 'required',
            'totaluangsaku' => 'required',
            'note'          => 'nullable|string',
            'posting'       => 'required',
            'transfer'      => 'nullable',
            'rekus'         => 'nullable' ,
            'akunkas'       => 'nullable',
        ]);

        // Simpan data ke database menggunakan metode create dari model UangSaku
        $UangSaku = UangSaku::create($validatedData);

        return response()->json([
            'message' => 'Data UangSaku berhasil disimpan',
            'data' => $UangSaku,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(UangSaku $uangSaku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UangSaku $uangSaku)
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
            'NIK'           => 'required',
            'JmlHariKerja'  => 'required',
            'usperhari'     => 'required',
            'uangsaku'      => 'required',
            'potongan'      => 'required',
            'totalterima'   => 'required',
            'rounded'       => 'required',
            'totaluangsaku' => 'required',
            'note'          => 'nullable|string',
            'posting'       => 'required',
            'transfer'      => 'nullable',
            'rekus'         => 'nullable' ,
            'akunkas'       => 'nullable',
        ]);

        $UangSaku = UangSaku::where('kdcabang', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data UangSaku berhasil diupdate',
            'data' => $UangSaku,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
        $UangSaku = UangSaku::where('kdcabang', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data UangSaku berhasil dihapus']);
    }
}
