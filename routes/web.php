<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\registerController;
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

Route::get('/', [homeController::class, 'index'])->name('index')->middleware('guest');

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'addData'])->middleware('guest');

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'checkUser'])->middleware('guest');

Route::get('/logout', [loginController::class, 'logout'])->middleware('auth');

Route::get('/home', [homeController::class, 'home'])->middleware('auth');

Route::get('/item/{item_id}', [itemController::class, 'detail'])->middleware('auth');
Route::post('/item', [itemController::class, 'buy'])->middleware('auth');

Route::get('/cart', [itemController::class, 'index'])->middleware('auth');
Route::post('/deleteItem', [itemController::class, 'delete'])->middleware('auth');
Route::post('/checkout', [itemController::class, 'checkOut'])->middleware('auth');

Route::get('/profile', [profileController::class, 'index'])->middleware('auth');
Route::post('/updateProfile', [profileController::class, 'update'])->middleware('auth');
Route::get('/updProfile', [profileController::class, 'success'])->middleware('auth');

Route::get('/manageAccount', [profileController::class, 'manage'])->middleware('AdminAuthorization');

Route::get('/updRole/{user_id}', [profileController::class, 'showUpdateRole'])->middleware('AdminAuthorization');
Route::post('/updateRole', [profileController::class, 'UpdateRole'])->middleware('AdminAuthorization');

Route::get('/deleteUser/{user_id}', [profileController::class, 'delete'])->middleware('AdminAuthorization');