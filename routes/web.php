<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\MangueraController;
use App\Http\Controllers\MaguerasMaquinasController;
use App\Http\Controllers\UserthyssenController;
use App\Http\Controllers\ReportesController;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/thyssenkrupp/home', [App\Http\Controllers\UserController::class, 'index'])->name('user.home');
Route::get('/info', [App\Http\Controllers\UserController::class, 'info'])->name('info');
// Administrador HOME
Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
// Administrador USUARIOS
Route::get('/admin/users', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [App\Http\Controllers\UsuarioController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('admin.users.update');
Route::get('/admin/users/{user}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('admin.users.show');
Route::delete('/admin/users/{user}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('admin.users.destroy');
//Maquinas
Route::resource('admin/maquinas', MaquinaController::class);
//Mangueras
Route::resource('admin/mangueras', MangueraController::class);
//mangueras_maquinas
Route::resource('admin/Instalacion', MaguerasMaquinasController::class);
//Reportes
Route::get('/admin/reportes', [App\Http\Controllers\ReportesController::class, 'index'])->name('admin.reporte.index');
Route::get('/admin/reportes/export', [App\Http\Controllers\ReportesController::class, 'export'])->name('admin.reporte.export');
Route::get('/admin/reportes/{maquina}', [App\Http\Controllers\ReportesController::class, 'maquina'])->name('admin.reporte.maquina');
Route::get('/qrcode/{dato}', [App\Http\Controllers\ReportesController::class, 'qrcode'])->name('qrcode');

// -------------------------------------USUARIOS----------------------------------------------------------//

ROUTE::get('/user/maquinas',[App\Http\Controllers\UserthyssenController::class, 'index'])->name('user.maquinas');
ROUTE::get('/user/maquinas/{maquina}',[App\Http\Controllers\UserthyssenController::class, 'show'])->name('user.maquinas.show');

ROUTE::get('/user/reporte/fechas',[App\Http\Controllers\UserthyssenController::class, 'fechas'])->name('user.reporte.fechas');
ROUTE::post('/user/reporte/guardar',[App\Http\Controllers\UserthyssenController::class, 'guardar'])->name('user.reporte.guardar');

ROUTE::get('/user/reporte/mensual',[App\Http\Controllers\UserthyssenController::class, 'mensual'])->name('user.reporte.mensual');
ROUTE::get('/user/reporte/bimestral',[App\Http\Controllers\UserthyssenController::class, 'bimestral'])->name('user.reporte.bimestral');
ROUTE::get('/user/reporte/trimestral',[App\Http\Controllers\UserthyssenController::class, 'trimestral'])->name('user.reporte.trimestral');
ROUTE::get('/user/reporte/semestral',[App\Http\Controllers\UserthyssenController::class, 'semestral'])->name('user.reporte.semestral');
ROUTE::get('/user/reporte/anual',[App\Http\Controllers\UserthyssenController::class, 'anual'])->name('user.reporte.anual');
