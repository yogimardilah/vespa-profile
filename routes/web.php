<?php

use Illuminate\Support\Facades\Route;
// Admin now handled by Filament (remove custom admin routes/controllers)

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

use App\Http\Controllers\About\PublicController as AboutPublicController;
use App\Http\Controllers\News\PublicController as NewsPublicController;
use App\Http\Controllers\Gallery\PublicController as GalleryPublicController;
use App\Http\Controllers\Spmb\PublicController as SpmbPublicController;

Route::get('/about', [AboutPublicController::class, 'index'])->name('about');
Route::view('/akademik','akademik')->name('akademik');
Route::get('/news', [NewsPublicController::class, 'index'])->name('news');
Route::get('/gallery', [GalleryPublicController::class, 'index'])->name('gallery');
Route::view('/students','students')->name('students');
Route::view('/parents','parents')->name('parents');
Route::get('/spmb', [SpmbPublicController::class, 'showForm'])->name('spmb');
Route::post('/spmb', [SpmbPublicController::class, 'store'])->name('spmb.store');
Route::view('/contact','contact')->name('contact');

// Filament registers its own admin routes under `/admin`.
// The previous custom admin routes/controllers have been removed in favor of Filament.

