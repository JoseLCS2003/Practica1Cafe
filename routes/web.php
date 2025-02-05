<?php

use App\Http\Controllers\TiposCafeController;
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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/empresa', function () {
    return view('empresa');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/tipos-cafe', [TiposCafeController::class, 'index'])->name('tipos_cafe.index');
