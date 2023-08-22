<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Kota::whereNull('deleted_at')
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

        // Simpan data ke database menggunakan metode create dari model kota
        $kota = Kota::create($validatedData);

        return response()->json([
            'message' => 'Data kota berhasil disimpan',
            'data' => $kota,
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

        $kota = Kota::where('pk', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data kota berhasil diupdate',
            'data' => $kota,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kota = Kota::where('pk', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data kota berhasil dihapus']);
    }
}
