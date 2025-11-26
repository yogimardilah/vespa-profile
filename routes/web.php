<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::view('/about','about')->name('about');
Route::view('/akademik','akademik')->name('akademik');
Route::view('/news','news')->name('news');
Route::view('/gallery','gallery')->name('gallery');
Route::view('/students','students')->name('students');
Route::view('/parents','parents')->name('parents');
Route::view('/spmb','spmb')->name('spmb');
Route::view('/contact','contact')->name('contact');

