<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booksController;
use App\Http\Controllers\AuthController;
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

Route::get('/',function(){
    return view('welcome');
});
//


Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
});


//

Route::group(['middleware' => 'auth'], function() {
    Route::get('/books', [booksController::class, 'liste_books']);
    Route::get('/delete/{id}', [booksController::class, 'delete']);
    Route::post('/update/traitement', [booksController::class, 'update_traitement']);
    Route::get('/update/{id}', [booksController::class, 'update']);
    Route::get('/ajouter', [booksController::class, 'ajouter']);
    Route::post('/ajouter/traitement', [booksController::class, 'ajouter_traitement']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});




