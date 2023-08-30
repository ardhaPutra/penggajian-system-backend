<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawanList = Karyawan::fetchWithDetails()->get();

        return $karyawanList;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawan   = new Karyawan();
        $result     = $karyawan->storeData($request);

        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Karyawan   = Karyawan::find($id);
        $result     = $Karyawan->updateData($request);

        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $karyawan   = Karyawan::findOrFail($id);
        $result     = $karyawan->deleteData();

        return response()->json($result);
    }
}
