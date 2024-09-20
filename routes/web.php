<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\CustomAuthController;
use App\Http\Controllers\ProfileEditController;


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

Route::get('/',[CustomAuthController::class, 'index']);
Route::get('layout/app',[CustomAuthController::class, 'layout']);


Route::get('auth/login',[CustomAuthController::class, 'login'])->name('login')->middleware('alreadyLoggedIn');
Route::post('login-user',[CustomAuthController::class, 'loginUser'])->name('login-user');

Route::get('auth/registration',[CustomAuthController::class, 'registration'])->name('registration')->middleware('alreadyLoggedIn');;
Route::post('register-user',[CustomAuthController::class, 'registerUser'])->name('register-user');

Route::get('profile',[CustomAuthController::class, 'profile'])->middleware('isLoggedIn')->name('profile');
Route::get('logout',[CustomAuthController::class, 'logout'])->name('logout');

Route::get('edit-profile',[ProfileEditController::class, 'editForm'])->name('edit-profile');
Route::post('edit-user',[ProfileEditController::class, 'edit_profile'])->name('edit-user');
