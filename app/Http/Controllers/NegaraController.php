<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Negara::whereNull('deleted_at')
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

        // Simpan data ke database menggunakan metode create dari model Negara
        $negara = Negara::create($validatedData);

        return response()->json([
            'message' => 'Data negara berhasil disimpan',
            'data' => $negara,
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

        $negara = Negara::where('pk', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data negara berhasil diupdate',
            'data' => $negara,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $negara = Negara::where('pk', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data negara berhasil dihapus']);
    }
}
