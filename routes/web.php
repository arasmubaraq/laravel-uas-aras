<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dosen', [App\Http\Controllers\DosenController::class, 'index']);
Route::get('/dosen/create', [App\Http\Controllers\DosenController::class, 'create']);
Route::post('/dosen', [App\Http\Controllers\DosenController::class, 'store']);
Route::get('/dosen/{id}/edit', [App\Http\Controllers\DosenController::class, 'edit']);
Route::patch('/dosen/{id}', [App\Http\Controllers\DosenController::class, 'update']);
Route::delete('/dosen/{id}', [App\Http\Controllers\DosenController::class, 'destroy']);

Route::get('/matkul', [App\Http\Controllers\MatkulController::class, 'index']);
Route::get('/matkul/create', [App\Http\Controllers\MatkulController::class, 'create']);
Route::post('/matkul', [App\Http\Controllers\MatkulController::class, 'store']);
Route::get('/matkul/{id}/edit', [App\Http\Controllers\MatkulController::class, 'edit']);
Route::patch('/matkul/{id}', [App\Http\Controllers\MatkulController::class, 'update']);
Route::delete('/matkul/{id}', [App\Http\Controllers\MatkulController::class, 'destroy']);
