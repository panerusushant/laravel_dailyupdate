<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;

use App\Http\Controllers\userController;

use App\Http\Controllers\adminController;
use App\Http\Controllers\registrationController;

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


Route::get('/',[loginController::class,'create']);
Route::post('/login',[loginController::class,'store']);
Route::get('/user', [userController::class, 'index']);
Route::get('/admin', [adminController::class, 'index']);
Route::get('/register-form', [registrationController::class, 'create']);
Route::post('/register-user', [registrationController::class, 'store']);


