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
        return Negara::all();
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
        return Negara::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Negara $negara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Negara $negara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $negara = Negara::findOrFail($id);
        $negara->update($request->all());
        return $negara;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Negara $negara)
    {
        $negara = Negara::findOrFail($id);
        $negara->delete();
        return response()->json(['message' => 'Data negara berhasil dihapus']);
    }
}
