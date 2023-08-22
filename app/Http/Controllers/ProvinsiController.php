<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Provinsi::whereNull('deleted_at')
                ->orderBy('created_at', 'desc')
                ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nm' => 'required|max:50',
            'ctn' => 'nullable|string',
        ]);

        // Simpan data ke database menggunakan metode create dari model Provinsi
        $provinsi = Provinsi::create($validatedData);

        return response()->json([
            'message' => 'Data provinsi berhasil disimpan',
            'data' => $provinsi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nm' => 'required|max:50',
            'ctn' => 'nullable|string',
        ]);

        $provinsi = Provinsi::where('pk', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data provinsi berhasil diupdate',
            'data' => $provinsi,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::where('pk', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data provinsi berhasil dihapus']);
    }
}
