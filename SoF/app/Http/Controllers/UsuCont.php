<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuCont extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usu = Usuarios::all();
        return view('consulUser', compact('usu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usu = new Usuarios();
        $usu->nombre = $request->post('nombre');
        $usu->apPaterno = $request->post('apPaterno');
        $usu->apMaterno = $request->post('apMaterno');
        $usu->email = $request->post('email');
        $usu->password = $request->post('password');
        $usu->save();
        return redirect()->route('user.index')->with('success', 'Usuario agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usu = Usuarios::find($id);
        return view('elimuser', compact('usu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usu = Usuarios::find($id);
        return view('edituser', compact('usu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usu = Usuarios::find($id);
        $usu->nombre = $request->post('nombre');
        $usu->apPaterno = $request->post('apPaterno');
        $usu->apMaterno = $request->post('apMaterno');
        $usu->email = $request->post('email');
        $usu->password = $request->post('password');
        $usu->save();
        return redirect()->route('user.index')->with('success', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usu = Usuarios::find($id);
        $usu->delete();
        return redirect()->route('user.index')->with('success', 'Usuario eliminado correctamente');
    }
}
