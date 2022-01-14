<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\AutoaccesoController;
use App\Http\Controllers\AdeudoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\FallaController;
use App\Http\Controllers\PerdidaController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\EquipoSoftwareController;
use App\Http\Controllers\MateriaUsuarioController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\PrestamoController;

use App\Http\Controllers\HomeGenController;
use App\Http\Controllers\PerdidaFallaController;
use App\Http\Controllers\SoftwareGenController;
use App\Http\Controllers\AdeudoGenController;
use App\Http\Controllers\ContactoController;

//INDEX

Route::get('/admin', HomeController::class) ->middleware('auth.admin')->name('index');
Route::get('/general',[HomeController::class, 'index']) ->middleware('auth.user')->name('indexGeneral');
Route::get('/consulta_de_adeudos', AdeudoGenController::class)->name('adeudos');

//PAGINAS ADMINISTRADOR

//Rutas de la pagina alumnos
Route::get('/alumnos',[AlumnoController::class,'alumShow'])->name('alumnosP'); // metodo de select
Route::post('alta_alumno', [AlumnoController::class, 'store'])->name('altalum'); // metodo de create
Route::put('editar_alumno', [AlumnoController::class, 'edit'])->name('editaralumno'); // editar registro
Route::delete('borrar_alumno', [AlumnoController::class, 'destroy'])->name('borraralumno'); // borrar registro

//Rutas de la pagina laboratorio

Route::get('laboratorios', [LaboratorioController::class,'index'])->name('laboratoriosP');
Route::post('alta_laboratorio', [LaboratorioController::class, 'store'])->name('altaLab');
Route::put('editar_laboratorio', [LaboratorioController::class, 'edit'])->name('editarLab');
Route::delete('borrar_laboratorio', [LaboratorioController::class, 'destroy'])->name('borrarLab');

//Rutas de la pagina materia

Route::get('materias', [MateriaController::class,'index'])->name('materiasP');
Route::post('alta_materia', [MateriaController::class, 'store'])->name('altaMat');
Route::put('editar_materia', [MateriaController::class, 'edit'])->name('editarMat');
Route::delete('borrar_materia', [MateriaController::class, 'destroy'])->name('borrarMat');

//Rutas de la pagina usuario

Route::get('usuarios', [UsuarioController::class,'index'])->middleware('auth.admin')->name('usuariosP');
Route::post('alta_usuario', [UsuarioController::class, 'store'])->name('altaUsu');
Route::put('editar_usuario', [UsuarioController::class, 'edit'])->name('editarUsu');
Route::delete('borrar_usuario', [UsuarioController::class, 'destroy'])->name('borrarUsu');

//Rutas de la pagina equipo

Route::get('equipos', [EquipoController::class,'index'])->middleware('auth.admin')->name('equiposP');
Route::post('alta_equipo', [EquipoController::class, 'store'])->name('altaEqui');
Route::put('editar_equipo', [EquipoController::class, 'edit'])->name('editarEqui');
Route::delete('borrar_equipo', [EquipoController::class, 'destroy'])->name('borrarEqui');

//Rutas de la pagina autoacceso

Route::get('autoaccesos', [AutoaccesoController::class,'index'])->name('autoaccesoP');
Route::post('alta_autoacceso', [AutoaccesoController::class, 'store'])->name('altaAuto');
Route::put('editar_autoacceso', [AutoaccesoController::class, 'edit'])->name('editarAuto');
Route::delete('borrar_autoacceso', [AutoaccesoController::class, 'destroy'])->name('borrarAuto');

//Rutas de la pagina de adeudo

Route::get('adeudos', [AdeudoController::class,'index'])->name('adeudoP');
Route::post('alta_adeudo', [AdeudoController::class, 'store'])->name('altaAde');
Route::put('editar_adeudo', [AdeudoController::class, 'edit'])->name('editarAde');
Route::delete('borrar_adeudo', [AdeudoController::class, 'destroy'])->name('borrarAde');

//Rutas de la pagina de fallas

Route::get('fallas', [FallaController::class,'index'])->name('fallaP');
Route::post('alta_falla', [FallaController::class, 'store'])->name('altaFalla');
Route::put('editar_falla', [FallaController::class, 'edit'])->name('editarFalla');
Route::delete('borrar_falla', [FallaController::class, 'destroy'])->name('borrarFalla');

//Rutas de la pagina de perdidas

Route::get('perdidas', [PerdidaController::class,'index'])->name('perdidaP');
Route::post('alta_perdida', [PerdidaController::class, 'store'])->name('altaPerdida');
Route::put('editar_perdida', [PerdidaController::class, 'edit'])->name('editarPerdida');
Route::delete('borrar_perdida', [PerdidaController::class, 'destroy'])->name('borrarPerdida');


//Rutas de la pagina de software
Route::get('software', [SoftwareController::class,'index'])->name('softwareP');
Route::post('alta_software', [SoftwareController::class, 'store'])->name('altaSoftware');
Route::put('editar_software', [SoftwareController::class, 'edit'])->name('editarSoftware');
Route::delete('borrar_software', [SoftwareController::class, 'destroy'])->name('borrarSoftware');


//Rutas de la pagina equipo - software
Route::post('alta_EquiSoft', [EquipoSoftwareController::class, 'store'])->name('altaEquiSoft');
Route::put('editar_EquiSoft', [EquipoSoftwareController::class, 'edit'])->name('editarEquiSoft');
Route::delete('borrar_EquiSoft', [EquipoSoftwareController::class, 'destroy'])->name('borrarEquiSoft');


//Rutas de la pagina materia - usuario
Route::post('alta_MatUsu', [MateriaUsuarioController::class, 'store'])->name('altaMatUsu');
Route::put('editar_MatUsu', [MateriaUsuarioController::class, 'edit'])->name('editarMatUsu');
Route::delete('borrar_MatUsu', [MateriaUsuarioController::class, 'destroy'])->name('borrarMatUsu');

//Rutas de la pagina periodo
Route::get('periodos', [PeriodoController::class,'index'])->name('periodoP');
Route::post('alta_periodo', [PeriodoController::class, 'store'])->name('altaPeriodo');
Route::put('editar_periodo', [PeriodoController::class, 'edit'])->name('editarPeriodo');
Route::delete('borrar_periodo', [PeriodoController::class, 'destroy'])->name('borrarPeriodo');

//Rutas de la pagina de marcas
Route::get('marcas', [MarcaController::class,'index'])->name('marcaP');
Route::post('alta_marca', [MarcaController::class, 'store'])->name('altaMarca');
Route::put('editar_marca', [MarcaController::class, 'edit'])->name('editarMarca');
Route::delete('borrar_marca', [MarcaController::class, 'destroy'])->name('borrarMarca');

//PAGINAS GENERAL

//Pagina de software
Route::get('/consulta_de_software', [SoftwareGenController::class,'index'])->middleware('auth.user')->name('softwareG');
//Pagina de perdida y falla
Route::get('/perdidas_fallas', [PerdidaFallaController::class,'index'])->middleware('auth.user')->name('FallaPerdida');
Route::post('/fallas_alta', [PerdidaFallaController::class,'storeFalla'])->name('FallaA');
Route::post('/perdidas_alta', [PerdidaFallaController::class,'storePerdida'])->name('PerdidaA');
Route::put('/fallas_editar', [PerdidaFallaController::class,'editFalla'])->name('FallaB');
Route::put('/perdidas_editar', [PerdidaFallaController::class,'editPerdida'])->name('PerdidaB');
Route::delete('/fallas_borrar', [PerdidaFallaController::class, 'destroyFalla'])->name('FallaC');
Route::delete('/perdidas_borrar', [PerdidaFallaController::class, 'destroyPerdida'])->name('PerdidaC');

//Rutas de la pagina asignacion

Route::get('asignaciones', [AsignacionController::class,'index'])->middleware('auth.admin')->name('asignacionP');
Route::post('alta_asignacion', [AsignacionController::class, 'store'])->name('altaAsignacion');
Route::delete('borrar_asignacion', [AsignacionController::class, 'destroy'])->name('borrarAsignacion');

Route::get('/prestamos', [PrestamoController::class,'index'])->name('prestamosP');
Route::get('prestamos/show', [PrestamoController::class, 'show'])->name('showPrestamos');

Route::post('alta_prestamo', [PrestamoController::class, 'store'])->name('altaPrestamo');
Route::post('editar_prestamo/{id}', [PrestamoController::class, 'edit'])->name('editarPrestamo');
Route::post('actualizar_prestamo', [PrestamoController::class, 'update'])->name('actualizarPrestamo');
Route::post('borrar_prestamo/{id}', [PrestamoController::class, 'destroy'])->name('borrarPrestamo');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function(){
    return view('index');
})->name('principal');


Route::get('/contacto', ContactoController::class, 'index') ->name('contacto');
