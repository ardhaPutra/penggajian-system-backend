<?php

namespace App\Http\Controllers;

use App\Models\ShiftKaryawan;
use Illuminate\Http\Request;

class ShiftKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ShiftKaryawan::whereNull('deleted_at')
                ->orderBy('created_at', 'desc')
                ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nik' => 'required|max:50',
        ]);

        $ShiftKaryawan = ShiftKaryawan::where('id', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data ShiftKaryawan berhasil diupdate',
            'data' => $ShiftKaryawan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nik' => 'required|max:50',
        ]);

        // Simpan data ke database menggunakan metode create dari model ShiftKaryawan
        $ShiftKaryawan = ShiftKaryawan::create($validatedData);

        return response()->json([
            'message' => 'Data ShiftKaryawan berhasil disimpan',
            'data' => $ShiftKaryawan,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ShiftKaryawan = ShiftKaryawan::where('id', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data ShiftKaryawan berhasil dihapus']);
    }
}
