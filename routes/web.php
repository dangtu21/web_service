<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\AuthController;

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



Route::prefix('singin')->middleware('checkLogIn')->group(function (){
    Route::get("/game", function() {
        return view('signin');
    })->name('SignIn');
    Route::get("/SignUp", function() {
        return view('signUp');
    })->name('SignUp');
});

Route::post('/Register',[AdminController::class,'register'])->name('Register');
Route::get("/ForgotPassword", function() {
    return view('forgotPassword');
})->name('ForgotPassword');
Route::get("/ResetPassword", function() {
    return view('resetPassword');
})->name('ResetPassword');
Route::post('/LogIn',[AdminController::class,'login'])->name('LogIn');
// Sử dụng một tiền tố hợp lệ, ví dụ: 'admin'
Route::prefix('user')->middleware('user')->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })-> name("home");
    Route::get("/history", function() {
        return view('purchaseHistory');
    })->name('history');
    Route::get("/LogOut",[AdminController::class,'logout'] )->name('logout');
    Route::get("/store",[UserController::class,'store'])->name('store');
    Route::get("/payment",  [UserController::class,'payment'])->name('payment');
    Route::post("/postPayment",  [UserController::class,'postPayment'])->name('postPayment');
    Route::get("/api/shadowrocket",  [UserController::class,'getServer'])->name('shadowrocket');
});


