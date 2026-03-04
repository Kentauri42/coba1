<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'], '/index', [TestController::class,'index'])->name('index');

Route::post('/signin', [TestController::class,'signin'])->name('signin');

Route::post('/signup', [TestController::class,'signup'])->name('signup');

Route::get('/dashboard', [TestController::class,'dashboard'])->name('dashboard');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('index');
});