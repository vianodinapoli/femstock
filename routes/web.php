<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\GemulexController;
use App\Http\Controllers\AnfoController;
use App\Http\Controllers\FemviaturaController;
use App\Http\Controllers\PaioloneController;
use App\Models\Paiolone;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
})->name('login'); // Name the login route for redirection

Auth::routes();

// Apply auth middleware to all routes except login and registration
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Resource routes for users, gemulex, anfo, and femviatura
    route::resource('users', UserController::class);
    Route::resource('gemulex', GemulexController::class);
    Route::resource('anfo', AnfoController::class);
    Route::resource('femviatura', FemviaturaController::class);
    Route::resource('paiolone', PaioloneController::class);

});