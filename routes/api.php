<?php

// impiort 'use App\Http\Controllers\Api\v1\SiswaController;'

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\GuruController;
use App\Http\Controllers\Api\v1\KelasController;
use App\Http\Controllers\Api\v1\MapelController;
use App\Http\Controllers\Api\v1\SiswaController;
use App\Http\Controllers\Api\v1\AbsensiController;
use App\Http\Controllers\Api\v1\RuanganController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\v1\PembayaranController;
use App\Http\Controllers\Api\Auth\LogoutController;

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


Route::prefix('auth')->group(function() {
    Route::post('/login', LoginController::class);
    Route::post('/logout', LogoutController::class)->middleware('auth:sanctum');
});


Route::middleware('auth:sanctum')->prefix('v1')->group(function () {

    // Route Siswa
    Route::apiResource('/siswa', SiswaController::class);

    // Guru
    Route::apiResource('/guru', GuruController::class);

    // Absen
    Route::apiResource('/absensi', AbsensiController::class);
    
    // kelas
    Route::apiResource('/ruangan', RuanganController::class);

    // Mapel
    Route::apiResource('/mapel', MapelController::class);

    // pembayaran
    Route::apiResource('/pembayaran', PembayaranController::class);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
