<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest');
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('/', [LoginController::class, 'login']);
Route::post('/forgot-password', [LoginController::class, 'forgotPassword']);
Route::get('/userlogout', [LoginController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'store']);

Route::view('/student-table','master')->middleware('auth');

Route::view('/student-form','student_form')->middleware('auth');

Route::view('/student-table','student_table')->middleware('auth');

Route::post('/student-form', [StudentDetailController::class, 'store'])->middleware('auth');

Route::get('/student-table', [StudentDetailController::class, 'index'])->middleware('auth');

