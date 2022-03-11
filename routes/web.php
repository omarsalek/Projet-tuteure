<?php

use App\Http\Controllers\ShnController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get("/", [HomeController::class, "pageAccueil"]);

Route::get('/ModificationsProfil', [HomeController::class ,"modificationProfil"]);

Route::put('/ModificationsProfil',[HomeController::class ,"updateProfil"])->name('updateProfil');

Route::get('dashboard',[HomeController::class,"profilInformations"])->middleware(['auth'])->name('dashboard');


Route::get('/GererAnnonces', [ShnController::class ,"gererAnnonces"])->name('gererAnnonces');

Route::get('/ChoixCreationAnnonces', [ShnController::class ,"choixCreationAnnonces"])->name('choixCreationAnnonces');

Route::get('/CreationAnnonceVetements', [ShnController::class ,"creationAnnonceVetements"])->name('creationAnnonceVetements');



Route::post('/AnnonceEnregistrer',[ShnController::class ,"enregistrerAnnonceVet"])->name('enregistrerAnnonceVet');



require __DIR__.'/auth.php';
