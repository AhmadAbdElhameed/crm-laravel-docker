<?php

use Illuminate\Support\Facades\Route;


// use App\Http\Controllers\UserController;

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
Route::get('/index',[App\Http\Controllers\UsersController::class,'index']);
Route::get('/add',[App\Http\Controllers\UsersController::class,'add']);
Route::get('/list',[App\Http\Controllers\UsersController::class,'list']);
Route::get('/update',[App\Http\Controllers\UsersController::class,'update']);
Route::get('/find/{id}',[App\Http\Controllers\UsersController::class,'find']);
Route::get('/delete/{id}',[App\Http\Controllers\UsersController::class,'delete']);
Route::get('/check/{name}',[App\Http\Controllers\UsersController::class,'check']);

Route::get('/hello', function () {
    return "Hello Page";
});
