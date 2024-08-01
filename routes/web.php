<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Gestioncontroller;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/index',[Gestioncontroller::class,'main']);

Route::get('/Bventes',[Gestioncontroller::class,'app']);



// GESTION DE PROUIT: ROUTE

Route::get('/new',[ProduitController::class,'new']);

Route::get('/gestion_produit/create_pro',[ProduitController::class,'createPro']);

Route::get('/gestion_produit/liste_pro',[ProduitController::class,'listePro']);








// FIN DE GESTION DE PRODUIT