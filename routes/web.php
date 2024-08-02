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

// ceci ressence les routes propres au module de gestion du systeme

Route::prefix('/admin')->group(function () {
    
    Route::get('/index',[Gestioncontroller::class,'main'])->name('admin.index');
    Route::get('/Bventes',[Gestioncontroller::class,'ventesPages'])->name('admin.ventes');
    Route::get('/produits',[Gestioncontroller::class,'produit'])->name('admin.produits');

    Route::get('/users',[Gestioncontroller::class,'add_user_page'])->name('admin.users.main');
    Route::post('/users/ajout',[Gestioncontroller::class,'add_user'])->name('admin.users');

    Route::get('/users/caisse',[Gestioncontroller::class,'bilan_caissiere'])->name('admin.users.caisse');
    Route::get('/users/magasin',[Gestioncontroller::class,'bilan_magasinier'])->name('admin.users.magasin');

});




// GESTION DE PROUIT: ROUTE

Route::get('/gestion_produit/new',[ProduitController::class,'new']);

Route::get('/gestion_produit/create_pro',[ProduitController::class,'createPro']);
Route::post('/gestion_produit/create_pro',[ProduitController::class,'createProStore'])->name('createProStore');


Route::get('/gestion_produit/liste_pro',[ProduitController::class,'listePro']);








// FIN DE GESTION DE PRODUIT