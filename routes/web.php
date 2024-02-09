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
Route::get('/alhafiz', [MainController::class, 'companyAlhafiz'])->name('alhafiz');
Route::get('/talabalali', [MainController::class, 'companyTalabAlali'])->name('talabalali');
Route::post('/pdf', [MainController::class, 'generatePDF'])->name('pdf');


