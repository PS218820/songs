<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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

Route::get('/songs', [SongController::class, 'index'])->Name('songs.index');

Route::get('/songs/create', function () {
    return view('create');
});

Route::get('/songs/{urlnaam}',[SongController::class, 'show']);

Route::get('/songs/{urlnaam}/edit',[SongController::class, 'edit']);

Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
Route::delete('/songs/{id}', [SongController::class, 'destroy'])->name('songs.destroy');
Route::put('/songs/{id}', [SongController::class, 'update'])->name('songs.update');
