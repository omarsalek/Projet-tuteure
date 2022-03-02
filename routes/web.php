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

use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class, "pageAccueil"]);

Route::get('/ModificationsProfil', [HomeController::class ,"modificationProfil"]);

Route::get('dashboard',[HomeController::class,"profilInformations"])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
