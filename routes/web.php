<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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

Route::resource('', MainController::class);
Route::get('/company/{id}', [MainController::class, 'company'])->name('company');
Route::post('/pdf', [MainController::class, 'generatePDF'])->name('pdf');
Route::get('/downloadPDF/{id}',[MainController::class, 'download'])->name('downloadPDF');


