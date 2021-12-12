<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\VehicleController;

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

Route::post('/register', [AuthController::class, 'register']);

Route::get('/driver', [DriverController::class, 'index']);
Route::get('/driver/{id}', [DriverController::class, 'show']);

Route::delete('/vehicle/{id}', [VehicleController::class, 'destroy']);
Route::get('/vehicle', [VehicleController::class, 'index']);
Route::patch('/vehicle/{id}', [VehicleController::class, 'update']);
Route::post('/vehicle', [VehicleController::class, 'store']);

Route::get('/manufacturer', [ManufacturerController::class, 'index']);
