<?php

use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\GererOffre;
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

Route::get("/", [HomeController::class, "pageAccueil"])->name('pageAccueil');

Route::get('/ModificationsProfil', [HomeController::class ,"modificationProfil"]);

Route::put('/ModificationsProfil',[HomeController::class ,"updateProfil"])->name('updateProfil');

Route::get('dashboard',[HomeController::class,"profilInformations"])->middleware(['auth'])->name('dashboard');


Route::get('/GererAnnonces', [ShnController::class ,"gererAnnonces"])->name('gererAnnonces');


Route::get('/MesAnnonces', [ShnController::class ,"mesAnnonces"])->name('MesAnnonces');

Route::get('/ChoixCreationAnnonces', [ShnController::class ,"choixCreationAnnonces"])->name('choixCreationAnnonces');


Route::get('/CreationAnnonceVetements', [ShnController::class ,"creationAnnonceVetements"])->name('creationAnnonceVetements');


Route::post('/AnnonceEnregistrer',[ShnController::class ,"enregistrerAnnonceVet"])->name('enregistrerAnnonceVet');

Route::get('/CreationAnnonceChaussures', [ShnController::class ,"creationAnnonceChaussures"])->name('creationAnnonceChaussures');


Route::post('/AnnonceEnregistrerVet',[ShnController::class ,"enregistrerAnnonceChaus"])->name('enregistrerAnnonceChaus');

Route::get('/CreationAnnonceMateriels', [ShnController::class ,"creationAnnonceMateriels"])->name('creationAnnonceMateriels');

Route::post('/AnnonceEnregistrerMat',[ShnController::class ,"enregistrerAnnonceMat"])->name('enregistrerAnnonceMat');



Route::get('/LesAnnonces', [DemandeurController::class ,"lesAnnonces"])->name('lesAnnonces');

Route::get('/RechercherAnnonces', [DemandeurController::class ,"rechercherAnnonces"])->name('rechercherAnnonces');

Route::post('/searchResult', [DemandeurController::class ,"searchResult"])->name('searchResult');

Route::post('/supprimerCompte{id}', [DemandeurController::class ,"supprimerCompte"])->name('supprimerCompte');

//Offre Gerer

Route::post('/consulterAnnonce',[GererOffre::class ,"consulterOffre"])->name('consulterOffre');

Route::post('/consulterOffreSHN',[ShnController::class ,"consulterOffreSHN"])->name('consulterOffreSHN');

Route::post('/RechercherAnnonces',[GererOffre::class ,"choisirOffre"])->name('choisirOffre');

Route::post('/ajouterPhotos',[ShnController::class,"ajouterPhotos"])->name('ajouterPhotos');

require __DIR__.'/auth.php';
