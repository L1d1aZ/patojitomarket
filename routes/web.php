<?php

use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UsuarioController;
use App\Models\tipo_identificacion;
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
    return view('template.template');
});

Route::resource('perfil', PerfilController::class);

Route::resource('Usuario', UsuarioController::class);

Route::resource('tipo_identificacion', tipo_identificacionController::class);


