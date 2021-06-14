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
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function(){ return view('dashboard');})->name('dashboard');
    Route::prefix('admin')->group(function () {
        Route::get('/emails', [\App\Http\Controllers\Admin\EmailsController::class, 'emails'])->name('admin.emails');
    });

});

