<?php

use App\Http\Controllers\Admin\EmpresaController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ExpedienteController;
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
});



