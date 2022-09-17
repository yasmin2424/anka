<?php

use App\Http\Controllers\DashboardController;
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

Route::post('/logout',[UserController::class ,'logout'])->name('user.logout');
Route::get('/',[UserController::class,'index'])->name('user.login')->middleware('guest');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/signup',[UserController::class,'create'])->name('user.signup')->middleware('guest');
Route::post('/signup', [UserController::class , 'store'])->name('user.save');

//
// Route::middleware(["auth"])->group( function(){
    // inndex page
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // reports page
    Route::get('/dashboard/reports', [DashboardController::class , 'showReport'])->name('reports');




// });
