<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraCont extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carr = Carrera::all();
        return view('consulCarrera', compact('carr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carrera');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carr = new Carrera();
        $carr->carrera = $request->post('carrera');
        $carr->save();
        return redirect()->route('carrera.index')->with('success', 'Carrera agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carr = Carrera::find($id);
        return view('elimcarr', compact('carr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carr = Carrera::find($id);
        return view('editcarr', compact('carr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carr = Carrera::find($id);
        $carr->carrera = $request->post('carrera');
        $carr->save();
        return redirect()->route('carrera.index')->with('success', 'Carrera actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carr = Carrera::find($id);
        $carr->delete();
        return redirect()->route('carrera.index')->with('success', 'Carrera eliminado correctamente');
    }
}
