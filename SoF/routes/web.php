<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorP;
use App\Http\Controllers\UsuCont;
use App\Http\Controllers\CarreraCont;
use App\Http\Controllers\CuatriCont;

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

Route::get('/user', [UsuCont::class, 'create'])->name('Nuser.create');
Route::post('/usertabla', [UsuCont::class, 'store'])->name('Nuser.store');
Route::get('/consulUser', [UsuCont::class, 'index'])->name('user.index');
Route::get('/editarusu/{id}', [UsuCont::class, 'edit'])->name('editusu.edit');
Route::put('/actualizarusu/{id}', [UsuCont::class, 'update'])->name('editusu.update');
Route::get('/mostrarusu/{id}', [UsuCont::class, 'show'])->name('usu.show');
Route::delete('/eliminarusu/{id}', [UsuCont::class, 'destroy'])->name('usu.destroy');

Route::get('/carrera', [CarreraCont::class, 'create'])->name('Ncarrera.create');
Route::post('/carreratabla', [CarreraCont::class, 'store'])->name('Ncarrera.store');
Route::get('/consulCarr', [CarreraCont::class, 'index'])->name('carrera.index');
Route::get('/editarcarre/{id}', [CarreraCont::class, 'edit'])->name('editcarr.edit');
Route::put('/actualizarcarre/{id}', [CarreraCont::class, 'update'])->name('editcarr.update');
Route::get('/mostrarcarre/{id}', [CarreraCont::class, 'show'])->name('carre.show');
Route::delete('/eliminarcarre/{id}', [CarreraCont::class, 'destroy'])->name('carre.destroy');

Route::get('/cuatri', [CuatriCont::class, 'create'])->name('Ncuatri.create');
Route::post('/cuatritabla', [CuatriCont::class, 'store'])->name('Ncuatri.store');
Route::get('/consulCarr', [CuatriCont::class, 'index'])->name('cuatri.index');
Route::get('/editarcua/{id}', [CuatriCont::class, 'edit'])->name('editcua.edit');
Route::put('/actualizarcua/{id}', [CuatriCont::class, 'update'])->name('editcua.update');
Route::get('/mostrarcua/{id}', [CuatriCont::class, 'show'])->name('cuat.show');
Route::delete('/eliminarcua/{id}', [CuatriCont::class, 'destroy'])->name('cuat.destroy');



Route::get('/materia', [controladorP::class, 'fMateria'])->name('Nmateria');
Route::get('/group', [controladorP::class, 'fGroup'])->name('Ngroup');


Route::get('/cargahora', [controladorP::class, 'fCargahora'])->name('Ncargahora');

//Route::get('/consulUser', [controladorP::class, 'fConsulUser'])->name('NconsulUser');
Route::get('/consulMateria', [controladorP::class, 'fConsulMateria'])->name('NconsulMateria');
Route::get('/consulCuatri', [controladorP::class, 'fConsulCuatri'])->name('NconsulCuatri');
Route::get('/consulCarrera', [controladorP::class, 'fConsulCarrera'])->name('NconsulCarrera');
Route::get('/consulGroup', [controladorP::class, 'fConsulGroup'])->name('NconsulGroup');