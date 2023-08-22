<?php

namespace App\Http\Controllers;

use App\Models\TunjanganHariRaya;
use Illuminate\Http\Request;

class TunjanganHariRayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TunjanganHariRaya::whereNull('deleted_at')
                ->orderBy('created_at', 'desc')
                ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kdthr'                 => 'required|max:50',
            'tanggal'               => 'required',
            'nik'                   => 'required|max:50',
            'jmlperiodethr'         => 'required',
            'jmlharikerja'          => 'required',
            'nilaithrperperiode'    => 'required',
            'nilaithr'              => 'required',
            'rounded'               => 'required',
            'pajak'                 => 'required',
            'totalnilaithr'         => 'required',
            'note'                  => 'nullable|string',
            'status'                => 'required',
            'posting'               => 'required',
            'transfer'              => 'nullable',
            'rekthr'                => 'nullable',
            'rekpph'                => 'nullable',
            'akunkas'               => 'nullable',
        ]);

        // Simpan data ke database menggunakan metode create dari model TunjanganHariRaya
        $TunjanganHariRaya = TunjanganHariRaya::create($validatedData);

        return response()->json([
            'message' => 'Data TunjanganHariRaya berhasil disimpan',
            'data' => $TunjanganHariRaya,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kdthr'                 => 'required|max:50',
            'tanggal'               => 'required',
            'nik'                   => 'required|max:50',
            'jmlperiodethr'         => 'required',
            'jmlharikerja'          => 'required',
            'nilaithrperperiode'    => 'required',
            'nilaithr'              => 'required',
            'rounded'               => 'required',
            'pajak'                 => 'required',
            'totalnilaithr'         => 'required',
            'note'                  => 'nullable|string',
            'status'                => 'required',
            'posting'               => 'required',
            'transfer'              => 'nullable',
            'rekthr'                => 'nullable',
            'rekpph'                => 'nullable',
            'akunkas'               => 'nullable',
        ]);

        $TunjanganHariRaya = TunjanganHariRaya::where('kdcabang', $id)->update($validatedData);

        return response()->json([
            'message' => 'Data TunjanganHariRaya berhasil diupdate',
            'data' => $TunjanganHariRaya,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $TunjanganHariRaya = TunjanganHariRaya::where('kdcabang', $id)->update(['deleted_at' => now()]);

        return response()->json(['message' => 'Data TunjanganHariRaya berhasil dihapus']);
    }
}
