<?php
    use App\Http\Controllers\HomeController;
    use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class,"pageAccueil"]);
Route::get("/PageInscription",[HomeController::class,"pageInscription"]);
Route::get("/PageConnexion",[HomeController::class,"pageConnexion"]);
