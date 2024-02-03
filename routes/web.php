<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelajarController;

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
    return view('welcome');
});

Route::get('/training', function () {
    dd('test');
    return view('welcome');
});

Route::get('/pelajar', [PelajarController::class, 'index'])
    ->name('pelajar.index');

Route::get('/pelajar/create', [PelajarController::class, 'create'])
    ->name('pelajar.create');

Route::post('/pelajar', [PelajarController::class, 'store'])
    ->name('pelajar.store');

Route::get('/pelajar/{id}', [PelajarController::class, 'show'])
    ->name('pelajar.show');

Route::resource('program', \App\Http\Controllers\ProgramController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
