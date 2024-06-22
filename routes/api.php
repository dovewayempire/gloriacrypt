<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SecretController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->post('/user-secret', [SecretController::class, 'userSecret']);
Route::post('/secrets', [SecretController::class, 'store']);
Route::get('/secret/{secret}', [SecretController::class, 'secret'])->name('api.secret');
Route::get('/private/{uuid}', [SecretController::class, 'generatelink'])->name('api.view.secret');
// Route::post('/user-secret', [SecretController::class, 'userSecret']);
Route::post('/clear-secret-link', [SecretController::class, 'clearSecretLink']);
Route::get('/mask-secret-content/{id}', [SecretController::class, 'maskSecretContent']);
Route::post('/check-phasepass/{id}', [SecretController::class, 'checkPhasepass']);
