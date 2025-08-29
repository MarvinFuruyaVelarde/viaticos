<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Roles
    Route::post('roles/store',[App\Http\Controllers\RoleController::class,'store'])->name('roles.store')->middleware('permission:roles.create');
    Route::get('roles',[App\Http\Controllers\RoleController::class,'index'])->name('roles.index')->middleware('permission:roles.index');
    Route::get('roles/create',[App\Http\Controllers\RoleController::class,'create'])->name('roles.create')->middleware('permission:roles.create');
    Route::put('roles/{role}',[App\Http\Controllers\RoleController::class,'update'])->name('roles.update')->middleware('permission:roles.edit');
    Route::get('roles/{role}',[App\Http\Controllers\RoleController::class,'show'])->name('roles.show')->middleware('permission:roles.show');
    Route::delete('roles/{role}',[App\Http\Controllers\RoleController::class,'destroy'])->name('roles.destroy')->middleware('permission:roles.destroy');
    Route::get('roles/{role}/edit',[App\Http\Controllers\RoleController::class,'edit'])->name('roles.edit')->middleware('permission:roles.edit');

    //User
    Route::post('users/store',[App\Http\Controllers\UserController::class,'store'])->name('users.store')->middleware('permission:users.create');
    Route::get('users',[App\Http\Controllers\UserController::class,'index'])->name('users.index')->middleware('permission:users.index');
    Route::get('users/create',[App\Http\Controllers\UserController::class,'create'])->name('users.create')->middleware('permission:users.create');
    Route::put('users/{user}',[App\Http\Controllers\UserController::class,'update'])->name('users.update')->middleware('permission:users.edit');
    Route::get('users/{user}',[App\Http\Controllers\UserController::class,'show'])->name('users.show')->middleware('permission:users.show');
    Route::get('usuario/{user}',[App\Http\Controllers\UserController::class,'destroy'])->name('users.destroy')->middleware('permission:users.destroy');
    Route::get('users/{user}/edit',[App\Http\Controllers\UserController::class,'edit'])->name('users.edit')->middleware('permission:users.edit');

    //Permisos
    Route::post('permisos/store',[App\Http\Controllers\PermissionController::class,'store'])->name('permisos.store')->middleware('permission:permisos.create');
    Route::get('permisos',[App\Http\Controllers\PermissionController::class,'index'])->name('permisos.index')->middleware('permission:permisos.index');
    Route::get('permisos/create',[App\Http\Controllers\PermissionController::class,'create'])->name('permisos.create')->middleware('permission:permisos.create');
    Route::put('permisos/{permiso}',[App\Http\Controllers\PermissionController::class,'update'])->name('permisos.update')->middleware('permission:permisos.edit');
    Route::get('permisos/{permiso}',[App\Http\Controllers\PermissionController::class,'show'])->name('permisos.show')->middleware('permission:permisos.show');
    Route::get('permisos/{permiso}/eliminar',[App\Http\Controllers\PermissionController::class,'destroy'])->name('permisos.destroy')->middleware('permission:permisos.destroy');
    Route::get('permisos/{permiso}/edit',[App\Http\Controllers\PermissionController::class,'edit'])->name('permisos.edit')->middleware('permission:permisos.edit');

    //parametricas
    //feriados
    Route::get('feriados',[App\Http\Controllers\FeriadoController::class,'index'])->name('feriados.index');
    Route::get('feriados/create',[App\Http\Controllers\FeriadoController::class,'create'])->name('feriados.create');
    Route::post('feriados/store',[App\Http\Controllers\FeriadoController::class,'store'])->name('feriados.store');
    Route::get('feriados/{feriado}/edit',[App\Http\Controllers\FeriadoController::class,'edit'])->name('feriados.edit');
    Route::put('feriados/{feriado}',[App\Http\Controllers\FeriadoController::class,'update'])->name('feriados.update');
    Route::delete('feriados/{feriado}',[App\Http\Controllers\FeriadoController::class,'destroy'])->name('feriados.destroy');
    Route::get('feriados/pdf',[App\Http\Controllers\FeriadoController::class,'show'])->name('feriados.show');
    Route::get('feriados/xls',[App\Http\Controllers\FeriadoController::class,'export'])->name('feriados.export');

    //lugares
    Route::get('lugares',[App\Http\Controllers\LugarController::class,'index'])->name('lugares.index');
    Route::get('lugares/create',[App\Http\Controllers\LugarController::class,'create'])->name('lugares.create');
    Route::post('lugares/store',[App\Http\Controllers\LugarController::class,'store'])->name('lugares.store');
    Route::get('lugares/{lugar}/edit',[App\Http\Controllers\LugarController::class,'edit'])->name('lugares.edit');
    Route::put('lugares/{lugar}',[App\Http\Controllers\LugarController::class,'update'])->name('lugares.update');
    Route::delete('lugares/{lugar}',[App\Http\Controllers\LugarController::class,'destroy'])->name('lugares.destroy');
    /*Route::get('aeropuertos/pdf',[App\Http\Controllers\AeropuertoController::class,'show'])->name('aeropuertos.show')->middleware('permission:aeropuertos.show');
    Route::get('aeropuertos/xls',[App\Http\Controllers\AeropuertoController::class,'export'])->name('aeropuertos.export')->middleware('permission:aeropuertos.show');*/

    //feriados
    Route::get('vias',[App\Http\Controllers\ViaController::class,'index'])->name('vias.index');
    /*Route::get('aeropuertos/create',[App\Http\Controllers\AeropuertoController::class,'create'])->name('aeropuertos.create')->middleware('permission:aeropuertos.create');
    Route::post('aeropuertos/store',[App\Http\Controllers\AeropuertoController::class,'store'])->name('aeropuertos.store')->middleware('permission:aeropuertos.create');
    Route::get('aeropuertos/{aeropuerto}/edit',[App\Http\Controllers\AeropuertoController::class,'edit'])->name('aeropuertos.edit')->middleware('permission:aeropuertos.edit');
    Route::put('aeropuertos/{aeropuerto}',[App\Http\Controllers\AeropuertoController::class,'update'])->name('aeropuertos.update')->middleware('permission:aeropuertos.edit');
    Route::delete('aeropuertos/{aeropuerto}',[App\Http\Controllers\AeropuertoController::class,'destroy'])->name('aeropuertos.destroy')->middleware('permission:aeropuertos.destroy');
    Route::get('aeropuertos/pdf',[App\Http\Controllers\AeropuertoController::class,'show'])->name('aeropuertos.show')->middleware('permission:aeropuertos.show');
    Route::get('aeropuertos/xls',[App\Http\Controllers\AeropuertoController::class,'export'])->name('aeropuertos.export')->middleware('permission:aeropuertos.show');*/

    Route::get('viaticos',[App\Http\Controllers\RegistroViaticoController::class,'index'])->name('viaticos.index');
    Route::get('viaticos/create',[App\Http\Controllers\RegistroViaticoController::class,'create'])->name('viaticos.create');
    Route::post('viaticos/store',[App\Http\Controllers\RegistroViaticoController::class,'store'])->name('viaticos.store');
    Route::get('viaticos/obtieneMontoViatico',[App\Http\Controllers\RegistroViaticoController::class, 'obtieneMontoViatico'])->name('viaticos.obtieneMontoViatico');
    Route::get('viaticos/obtieneNroDiaFeriado',[App\Http\Controllers\RegistroViaticoController::class, 'obtieneNroDiaFeriado'])->name('viaticos.obtieneNroDiaFeriado');
    Route::get('viaticos/{viatico}/edit',[App\Http\Controllers\RegistroViaticoController::class,'edit'])->name('viaticos.edit');
    Route::put('viaticos/{viatico}',[App\Http\Controllers\RegistroViaticoController::class,'update'])->name('viaticos.update');
    Route::delete('viaticos/{viatico}',[App\Http\Controllers\RegistroViaticoController::class,'destroy'])->name('viaticos.destroy');
    Route::get('viaticos/pdf',[App\Http\Controllers\RegistroViaticoController::class,'show'])->name('viaticos.show');
    Route::get('viaticos/xls',[App\Http\Controllers\RegistroViaticoController::class,'export'])->name('viaticos.export');
    Route::put('viaticos/{viatico}/send',[App\Http\Controllers\RegistroViaticoController::class,'send'])->name('viaticos.send');
    Route::get('viaticos/pdf/{viatico}',[App\Http\Controllers\RegistroViaticoController::class,'showBoletaLiq'])->name('viaticos.showBoletaLiq');

    Route::get('registrarpagoviaticos',[App\Http\Controllers\RegistroPagoViaticoController::class,'index'])->name('registrarpagoviaticos.index');
    Route::get('registrarpagoviaticos/{viatico}/registrar',[App\Http\Controllers\RegistroPagoViaticoController::class,'edit'])->name('registrarpagoviaticos.edit');
    Route::put('registrarpagoviaticos/{viatico}',[App\Http\Controllers\RegistroPagoViaticoController::class,'update'])->name('registrarpagoviaticos.update');
    Route::put('registrarpagoviaticos/{viatico}/send',[App\Http\Controllers\RegistroPagoViaticoController::class,'send'])->name('registrarpagoviaticos.send');

    Route::get('viaticopagados',[App\Http\Controllers\ViaticoPagadoController::class,'index'])->name('viaticopagados.index');

    Route::get('reportedetalleviatico',[App\Http\Controllers\ReporteDetalleViatico::class,'index'])->name('reportedetalleviatico.index');
    Route::get('reportedetalleviatico/obtieneReporte',[App\Http\Controllers\ReporteDetalleViatico::class,'obtieneReporte'])->name('reportedetalleviatico.obtieneReporte');
    Route::get('reportedetalleviatico/pdf',[App\Http\Controllers\ReporteDetalleViatico::class,'show'])->name('reportedetalleviatico.show');
    Route::get('reportedetalleviatico/xls',[App\Http\Controllers\ReporteDetalleViatico::class,'export'])->name('reportedetalleviatico.export');

    Route::get('reporteplanillaimpositiva',[App\Http\Controllers\ReportePlanillaImpositiva::class,'index'])->name('reporteplanillaimpositiva.index');
    Route::get('reporteplanillaimpositiva/obtieneReporte',[App\Http\Controllers\ReportePlanillaImpositiva::class,'obtieneReporte'])->name('reporteplanillaimpositiva.obtieneReporte');
    Route::get('reporteplanillaimpositiva/pdf',[App\Http\Controllers\ReportePlanillaImpositiva::class,'show'])->name('reporteplanillaimpositiva.show');
    Route::get('reporteplanillaimpositiva/xls',[App\Http\Controllers\ReportePlanillaImpositiva::class,'export'])->name('reporteplanillaimpositiva.export');
});
