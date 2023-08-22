<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jabatan::whereNull('deleted_at')
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
            'tJab' => 'required|integer',
            'ctn' => 'nullable|string',
        ]);

        // Simpan data ke database menggunakan metode create dari model Jabatan
        $jabatan = Jabatan::create($validatedData);

        return response()->json([
            'message' => 'Data jabatan berhasil disimpan',
            'data' => $jabatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nm' => 'required|max:50',
            'tJab' => 'required|integer',
            'ctn' => 'nullable|string',
        ]);

        $jabatan = Jabatan::where('pk', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data jabatan berhasil diupdate',
            'data' => $jabatan,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::where('pk', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data jabatan berhasil dihapus']);
    }
}
