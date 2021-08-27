<?php

use App\Http\Controllers\Admin\EmpresaController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\ExpedienteMod;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[App\Http\Controllers\Seguridad\LoginController::class,'index'])->name('login');
Route::post('/login',[App\Http\Controllers\Seguridad\LoginController::class,'login'])->name('login_post');
Route::get('/logout', [App\Http\Controllers\Seguridad\LoginController::class,'logout'])->name('logout');

/* aqui estamos agergando el grupo de url que necesitan un login para ser usadas */
Route::middleware('auth')->group(function () {
    Route::get('/menu', [App\Http\Controllers\Admin\AdminController::class, 'index']);
    
    /* Empresa */
    Route::get('/empresa',[EmpresaController::class,'index'])->name('EmpresaCrear');
    Route::resource('Empresa', EmpresaController::class); /* este incluye todas las rutas de la empresa controller*/

    /* Clientes */
    Route::get('/clientes',[ClientesController::class,'index'])->name('ClientesCrear');
    Route::resource('/clientes', ClientesController::class); /* este incluye todas las rutas de la clientes controller*/

    /* Nuevo Expediente*/
    Route::get('/expediente',[ExpedienteController::class,'index'])->name('ExpedienteCrear');
    Route::resource('/expedientes', ExpedienteController::class); /* este incluye todas las rutas de la expediente controller*/

    /* Ver expediente*/
    Route::get('/expediente-mod/{CodExpediente}',[ExpedienteMod::class,'index'])->name('ModExpedientes');
    Route::resource('/expedienteMod', ExpedienteMod::class);

    Route::get('/expediente-mod/equipos',[ExpedienteMod::class,'index'])->name('equipos.index');
    Route::post('/expediente-mod/equipos/agregar',[ExpedienteMod::class,'equipoagregar'])->name('equipos.agregar');
    Route::post('/expediente-mod/equipos/actualizar',[ExpedienteMod::class,'EquiposActualizar'])->name('equipos.actualizar');
    Route::post('/expediente-mod/embarcadorOconsignatario',[ExpedienteMod::class,'embarcadoroconsignatario'])->name('emboconsi.importar');

    Route::post('/expediente-mod/costousd/agregar',[ExpedienteMod::class,'CostoUsdAgregar'])->name('costousd.agregar');
    Route::post('/expediente-mod/costousd/actualizar',[ExpedienteMod::class,'CostoUsdActualizar'])->name('costousd.actualizar');

    Route::post('/expediente-mod/ingresousd/agregar',[ExpedienteMod::class,'IngresoUsdAgregar'])->name('ingresousd.agregar');
    Route::post('/expediente-mod/ingresousd/actualizar',[ExpedienteMod::class,'IngresoUsdActualizar'])->name('ingresousd.actualizar');
    
    Route::post('/expediente-mod/ingresogtq/list',[ExpedienteMod::class,'IngresoGtqList'])->name('ingresogtq.list');
    Route::post('/expediente-mod/costogtq/list',[ExpedienteMod::class,'CostoGtqList'])->name('costogtq.list');
    
});



