<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuatri;

class CuatriCont extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cua = Cuatri::all();
        return view('consulCuatri', compact('cua'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cuatri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cua = new Cuatri();
        $cua->cuatri = $request->post('cuatri');
        $cua->save();
        return redirect()->route('cuatri.index')->with('success', 'Cuatrimestre agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cua = Cuatri::find($id);
        return view('elimcua', compact('cua'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cua = Cuatri::find($id);
        return view('editcua', compact('cua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cua = Cuatri::find($id);
        $cua->cuatri = $request->post('cuatri');
        $cua->save();
        return redirect()->route('cuatri.index')->with('success', 'Cuatrimestre actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cua = Cuatri::find($id);
        $cua->delete();
        return redirect()->route('cuatri.index')->with('success', 'Cuatrimestre eliminado correctamente');
    }
}
