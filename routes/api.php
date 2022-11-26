<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ServiceCheckingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\CheckingController;

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

Route::Apiresource('users',PersonController::class);
Route::Apiresource('pets',PetController::class);
Route::Apiresource('Service',ServiceController::class);
Route::Apiresource('cita',CheckingController::class);
//Route::Apiresource('service_checking',ServiceCheckingController::class);
//Route::Apiresource('type_user',TypeUserController::class);
