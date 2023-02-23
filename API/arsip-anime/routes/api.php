<?php

use App\Http\Controllers\NotesController;
use App\Http\Controllers\TitleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('title', TitleController::class);
Route::apiResource('notes', NotesController::class);
Route::get('/title/search', [TitleController::class, 'show']);
Route::delete('/notes/{id}/delete', [NotesController::class, 'destroy']);
Route::put('/notes/{id}', [NotesController::class, 'update']);