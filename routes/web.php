<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImportController;
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
    return view('welcome');
});

// Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('home');

Route::resource('/livre', LivreController::class);
Route::resource('/auteur', AuteurController::class);
Route::resource('/emprunt', EmpruntController::class);
// Route::get('/emprunt/search', [EmpruntController::class, 'search'])->name('emprunt.search');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/generate-pdf', [DashboardController::class, 'generatePDF'])->name('dashboard.generatePDF');




Route::post('/import', [ImportController::class, 'import'])->name('import');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
