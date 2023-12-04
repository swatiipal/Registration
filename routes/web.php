<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;
use App\Models\Login;

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

//For Login
Route::get('/', [LoginController::class,'index']);
Route::post('/', [LoginController::class,'store']);
Route::get('/controller',[TestController::class,'welcome']);

//For Model
Route::get('/login', function(){
    $login = Login::all();
    echo "<pre>";
    print_r($login->toArray());
});

//For Register
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);
Route::get('/view',[RegisterController::class,'view']);
Route::get('register/delete/{id}',[RegisterController::class,'delete'])->name('register.delete');
Route::get('/register/edit/{id}',[RegisterController::class,'edit'])->name('register.edit');
Route::get('/register/update/{id}',[RegisterController::class,'update'])->name('register.update');