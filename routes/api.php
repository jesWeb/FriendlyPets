<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PersonController;
use App\Http\Controllers\Api\PetController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\CheckingController;
// use App\Http\Controllers\TypeUserController;
// use App\Http\Controllers\ServiceCheckingController;


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

Route::Apiresource('usersApi',PersonController::class);
Route::Apiresource('petsApi',PetController::class);
Route::Apiresource('ServiceApi',ServiceController::class);
Route::Apiresource('citaApi',CheckingController::class);
//Route::Apiresource('service_checking',ServiceCheckingController::class);
//Route::Apiresource('type_user',TypeUserController::class);
