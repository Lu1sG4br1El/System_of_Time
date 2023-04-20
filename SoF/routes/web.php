<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorP;
use App\Http\Controllers\UsuCont;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [UsuCont::class, 'create'])->name('Nuser.create');
Route::post('/user', [UsuCont::class, 'store'])->name('Nuser.store');
Route::get('/consulUser', [UsuCont::class, 'index'])->name('user.index');
Route::get('/editar/{id}', [UsuCont::class, 'edit'])->name('editusu.edit');
Route::put('/actualizar/{id}', [UsuCont::class, 'update'])->name('editusu.update');
Route::get('/mostrar/{id}', [UsuCont::class, 'show'])->name('usu.show');
Route::delete('/eliminar/{id}', [UsuCont::class, 'destroy'])->name('usu.destroy');


Route::get('/materia', [controladorP::class, 'fMateria'])->name('Nmateria');
Route::get('/group', [controladorP::class, 'fGroup'])->name('Ngroup');
Route::get('/cuatri', [controladorP::class, 'fCuatri'])->name('Ncuatri');
Route::get('/carrera', [controladorP::class, 'fCarrera'])->name('Ncarrera');
Route::get('/cargahora', [controladorP::class, 'fCargahora'])->name('Ncargahora');

//Route::get('/consulUser', [controladorP::class, 'fConsulUser'])->name('NconsulUser');
Route::get('/consulMateria', [controladorP::class, 'fConsulMateria'])->name('NconsulMateria');
Route::get('/consulCuatri', [controladorP::class, 'fConsulCuatri'])->name('NconsulCuatri');
Route::get('/consulCarrera', [controladorP::class, 'fConsulCarrera'])->name('NconsulCarrera');
Route::get('/consulGroup', [controladorP::class, 'fConsulGroup'])->name('NconsulGroup');