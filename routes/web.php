<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\SongAlbumController;

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

//SONGS
Route::get('/', function () {
    return view('welcome');
});
Route::get('/songs', [SongController::class, 'index'])->Name('songs.index');

Route::get('/songs/create', function () {
    return view('Songs.create');
});
Route::get('/songs/{id}',[SongController::class, 'show']);
Route::get('/songs/{id}/edit',[SongController::class, 'edit']);
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
Route::delete('/songs/{id}', [SongController::class, 'destroy'])->name('songs.destroy');
Route::put('/songs/{id}', [SongController::class, 'update'])->name('songs.update');



//Albums
Route::get('/albums', [AlbumController::class, 'index'])->Name('albums.index');

Route::get('/albums/create', function () {
    return view('Albums.create');
});
Route::get('/albums/{id}',[AlbumController::class, 'show']);
Route::get('/albums/{id}/edit',[AlbumController::class, 'edit']);
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
Route::delete('/albums/{id}', [AlbumController::class, 'destroy'])->name('albums.destroy');
Route::put('/albums/{id}', [AlbumController::class, 'update'])->name('albums.update');


//Bands
Route::get('/bands', [BandController::class, 'index'])->Name('bands.index');

Route::get('/bands/create', function () {
    return view('Bands.create');
});
Route::get('/bands/{id}',[BandController::class, 'show']);
Route::get('/bands/{id}/edit',[BandController::class, 'edit']);
Route::post('/bands', [BandController::class, 'store'])->name('bands.store');
Route::delete('/bands/{id}', [BandController::class, 'destroy'])->name('bands.destroy');
Route::put('/bands/{id}', [BandController::class, 'update'])->name('bands.update');

//SongAlbum
Route::post('/songs/{id}/albums', [SongAlbumController::class, 'store'])->name('songsAlbum.store');
// Route::delete('/songs/{id}', [SongAlbumController::class, 'destroy'])->name('songsAlbum.destroy');
