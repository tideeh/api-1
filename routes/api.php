<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtigoController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('artigos', [ArtigoController::class, 'index']);

Route::get('artigo/{id}', [ArtigoController::class, 'show']);

Route::post('artigo', [ArtigoController::class, 'store']);

Route::put('artigo/{id}', [ArtigoController::class, 'update']);

Route::delete('artigo/{id}', [ArtigoController::class, 'destroy']);

Route::delete('artigos', [ArtigoController::class, 'destroyAll']);
