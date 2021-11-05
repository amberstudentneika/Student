<?php

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

//Dashboard
Route::get('/home', function () {
    return view('welcome');
});

//login
Route::view('/','livelogin');

Route::view('/student','liveAddStudent')->name('addStudent');
Route::view('/number','liveNumber')->name('number');
Route::view('/dropdown','liveViewStudentNumber')->name('viewstudentnumber');
//Auth::routes();
//
//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
