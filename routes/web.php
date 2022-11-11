<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ServiceCheckingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\CheckingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//resources
            //nombreRT  //controlador            //
 //Route::get('usuario',[PersonController::class, 'index'])->name('person.index');
 //Route::post('/usuarios',[PersonController::class, 'store'])->name('usuario.store');
// Route::put('mirutaapiPU',[SubjectsController::class, 'index'])->name('subject');
// Route::delete('mirutaapiD',[SubjectsController::class, 'index'])->name('subject');

Route::resource('usuario',PersonController::class);
Route::resource('mascota',PetController::class);
Route::resource('servicios',ServiceController::class);
Route::resource('checking',CheckingController::class);
Route::resource('servcheck',ServiceCheckingController::class);
Route::resource('tipUser',TypeUserController::class);
Route::resource('AddUser',PersonController::class);
//Route::resource('service_checking',ServiceCheckingController::class);
//Route::resource('type_user',TypeUserController::class);
//Route::resource('checking',CheckingController::class);
