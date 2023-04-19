<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorP extends Controller
{
    function fUser(){
        return view('user');
    }
    function fMateria(){
        return view('materia');
    }
    function fGroup(){
        return view('group');
    }
    function fCuatri(){
        return view('cuatri');
    }
    function fCarrera(){
        return view('carrera');
    }
    function fCargahora(){
        return view('cargahora');
    }
    function fConsulUser(){
        return view('consulUser');
    }
    function fConsulMateria(){
        return view('consulMateria');
    }
    function fConsulCuatri(){
        return view('consulCuatri');
    }
    function fConsulCarrera(){
        return view('consulCarrera');
    }
    function fConsulGroup(){
        return view('consulGroup');
    }
}
