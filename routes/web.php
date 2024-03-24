<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\GemulexController;
use App\Http\Controllers\AnfoController;
use App\Models\Anfo;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get(uri:'/users', action: [App\Http\Controllers\UserController::class, 'index'])->name(name:'users.index');
// Route::get(uri:'/create', action: [UserController::class, 'create'])->name(name:'users.create');
// Route::post(uri:'/users', action: [UserController::class, 'store'])->name(name:'users.store');
// Route::get(uri:'/users{user}', action: [UserController::class, 'show'])->name(name:'users.show');
// Route::get(uri:'/users{user}/edit', action: [UserController::class, 'edit'])->name(name:'users.edit');
// Route::put(uri:'/users{user}', action: [UserController::class, 'update'])->name(name:'users.update');
// Route::delete(uri:'/users{user}', action: [UserController::class, 'destroy'])->name(name:'users.destroy');

route::resource('users', UserController::class); 
Route::resource('gemulex', GemulexController::class);
Route::resource('anfo', AnfoController::class);