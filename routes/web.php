<?php

use App\Http\Controllers\GestionController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome');

Route::get('/login', [GestionController::class, 'loginform'])->name('login');
Route::post('/loginstore', [GestionController::class, 'loginstore'])->name('loginstore');

Route::get('/product', [GestionController::class, 'product'])->name('product');
Route::get('/create', [GestionController::class, 'create'])->name('create');
Route::post('/store', [GestionController::class, 'store'])->name('store');
    

