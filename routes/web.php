<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
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

// Route::get('/', function () {
//     return view('index');
// })->name('homepage');

// Route::get('/about', function () {
//     return view('about');
// })->name('aboutpage');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contactpage');

// Route::get('/gallery', function () {
//     return view('gallery');
// })->name('gallerypage');

Route::get('/', [EcommerceController::class, 'home'])->name('homepage');
Route::get('/about', [EcommerceController::class, 'about'])->name('aboutpage');
Route::get('/gallery', [EcommerceController::class, 'gallery'])->name('gallerypage');
Route::get('/contact', [EcommerceController::class, 'contact'])->name('contactpage');
