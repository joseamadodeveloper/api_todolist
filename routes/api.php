<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SubtaskController;
use App\Http\Controllers\CategoryController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas con sanctum
Route::middleware('auth:sanctum')->group(function () {

    // ✅ Usuario actual
    Route::get('/user', function () {
        return auth()->user();
    });

    // ✅ Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // ✅ Tareas
    Route::apiResource('tasks', TaskController::class);

    // ✅ Subtareas
    Route::apiResource('subtasks', SubtaskController::class);

    // ✅ Categorías
    Route::apiResource('categories', CategoryController::class);
});
