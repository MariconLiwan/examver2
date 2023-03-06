<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;


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


Route::get('/users',[UserController::class, 'index']);
Route::get( '/user/{id}',[UserController::class, 'show']);
Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/', [UserController::class, 'index'])->middlerware('auth');

Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process',[UserController::class, 'process']);

Route::get('/register',[UserController::class, 'register']);
Route::post('/store',[UserController::class, 'store']);

