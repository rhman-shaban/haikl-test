<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-post', [AuthController::class, 'login_post'])->name('login-post');

Route::get('/', [AuthController::class, 'welcome'])->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
