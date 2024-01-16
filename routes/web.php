<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('user.register');
});




//get to login screen
Route::get('/login', [UserController::class, 'create']) -> name('login');
//get to register screen
Route::get('/register', [UserController::class, 'register']);
//store new account and fire log-out screen
Route::post('/store',[UserController::class,'store']);
//get to log out screen
Route::get('/log_out',[UserController::class,'log_out'])->middleware('auth');
//Fire when logout button is pressed, sending you back to register
Route::post('/logout',[UserController::class,'logout']);
//process login, sends you to log_out
Route::post('/login/process', [UserController::class, 'process']);




