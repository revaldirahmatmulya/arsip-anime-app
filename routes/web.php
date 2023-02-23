<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\NotesController;
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
    return redirect('/home/winter');
});

// Route::get('/home', [AnimeController::class, 'index']);
Route::get('/home/winter', [AnimeController::class, 'index']);
Route::get('/home/summer', [AnimeController::class, 'index']);
Route::get('/home/spring', [AnimeController::class, 'index']);
Route::get('/home/fall', [AnimeController::class, 'index']);

Route::get('/detail/{id}/{title}', [AnimeController::class, 'show']);

Route::get('/notes', [NotesController::class, 'index']);
Route::get('/notes/create', [NotesController::class, 'create']);
Route::get('/notes/{id}/show', [NotesController::class, 'show']);
Route::post('/notes/store', [NotesController::class, 'store']);
Route::get('/notes/{id}/edit', [NotesController::class, 'edit']);
Route::get('/notes/{id}', [NotesController::class, 'update']);
Route::get('/notes/{id}/delete', [NotesController::class, 'destroy']);