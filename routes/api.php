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

//Route::get('persona',[PersonController::class, 'index'])->name('persona.index');
// Route::post('mirutaapiP',[SubjectsController::class, 'index'])->name('subject');
// Route::put('mirutaapiPU',[SubjectsController::class, 'index'])->name('subject');
// Route::delete('mirutaapiD',[SubjectsController::class, 'index'])->name('subject');


// Route::Apiresource('usuario',PersonController::class);
// Route::Apiresource('mascotas',PetController::class);
// Route::Apiresource('Servicio',ServiceController::class);
//Route::Apiresource('service_checking',ServiceCheckingController::class);
//Route::Apiresource('type_user',TypeUserController::class);
//Route::Apiresource('checking',CheckingController::class);