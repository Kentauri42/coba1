<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserLog;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'], '/index', [TestController::class,'index'])->name('index');

Route::post('/signin', [TestController::class,'signin'])->name('signin');

Route::post('/signup', [TestController::class,'signup'])->name('signup');

Route::get('/dashboard', [TestController::class,'dashboard'])->name('dashboard');

Route::post('/logout', [TestController::class,'logout'])->name('logout');