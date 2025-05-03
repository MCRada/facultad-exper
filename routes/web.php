<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});


// Route::get('/flota', function () {
//     return view('flota.index');
// });

// Route::get('/flota/create', [FlotaController::class, 'create']);

Route::resource('curso',CursoController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset' => false]);

Route::get('/home', [ProductoTerminadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    
    Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

    
    Route::get('/', [CursoController::class, 'index'])->name('home');
    Route::get('/users/home', [UserController::class, 'home'])->name('users.home');
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
