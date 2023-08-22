<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pendidikan::whereNull('deleted_at')
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

        // Simpan data ke database menggunakan metode create dari model Pendidikan
        $Pendidikan = Pendidikan::create($validatedData);

        return response()->json([
            'message' => 'Data Pendidikan berhasil disimpan',
            'data' => $Pendidikan,
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

        $Pendidikan = Pendidikan::where('pk', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data Pendidikan berhasil diupdate',
            'data' => $Pendidikan,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Pendidikan = Pendidikan::where('pk', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data Pendidikan berhasil dihapus']);
    }
}
