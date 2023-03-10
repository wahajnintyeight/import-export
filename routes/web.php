<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
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
    return view('home');
})->name('/');
Route::get('/about', [PagesController::class, 'view_about'])->name('about');
Route::get('/services', [PagesController::class, 'view_services'])->name('services');
Route::get('/contact', [PagesController::class, 'view_contact_page'])->name('contact');
Route::get('/catalog', [PagesController::class, 'view_catalog_page'])->name('catalog');
Route::post('/add-contact', [ContactController::class, 'create'])->name('store-contact');
Route::get('/download', [PagesController::class, 'downloadPDF'])->name('downloadPDF');
// Route::post('/add-contact', [PagesController::class], 'create')->name('store-contact');