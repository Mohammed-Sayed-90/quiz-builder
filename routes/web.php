<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
Route::get('/', [PageController::class, 'index']);
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/login', [PageController::class, 'login'])->name('login');
/*Route::get('/', function () {
    return view('welcome');
});*/
