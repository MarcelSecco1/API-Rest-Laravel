<?php

use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to the API',
    ]);
});

Route::put('/produtos/{id}', [ProdutoController::class, 'update']);
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});