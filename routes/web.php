<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
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

Route::fallback(function () {
    return response()->view('Admin.404', [], 404);
});

Route::get('/login', function(){
    return view('Admin.login');
})->name('login');
Route::post('/login', [AuthController::class, 'adminLogin']);
Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/update-password', [AuthController::class, 'updatePass']);
