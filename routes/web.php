<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;

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


Route::get('/', [LoginController::class, 'create']);
Route::post('/login',[LoginController::class, 'login']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/register-form', [RegistrationController::class, 'create']);
Route::post('/register-user', [RegistrationController::class, 'store']);
Route::get('/blog-form', [BlogController::class, 'create']);
Route::post('/post', [BlogController::class, 'store']);
Route::get('/logout', [LogoutController::class, 'logout']);


