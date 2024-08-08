<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Gestioncontroller;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;




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

    Route::get('/index',[Gestioncontroller::class,'main'])->name('admin.index')->middleware('auth');
    Route::get('/Bventes',[Gestioncontroller::class,'ventesPages'])->name('admin.ventes');
    Route::get('/produits',[Gestioncontroller::class,'produit'])->name('admin.produits');

    Route::get('/users',[Gestioncontroller::class,'add_user_page'])->name('admin.users.main');
    Route::post('/users/ajout',[Gestioncontroller::class,'add_user'])->name('admin.users');

    Route::get('/users/caisse',[Gestioncontroller::class,'bilan_caissiere'])->name('admin.users.caisse');
    Route::get('/users/magasin',[Gestioncontroller::class,'bilan_magasinier'])->name('admin.users.magasin');

})->middleware('auth');




// GESTION DE PROUIT: ROUTE

Route::get('/gestion_produit/new',[ProduitController::class,'new'])->name('new');

                 // creer un prouduit
Route::get('/gestion_produit/create_pro',[ProduitController::class,'createPro'])->name('createPro');
Route::post('/gestion_produit/create_pro',[ProduitController::class,'createProStore'])->name('createProStore');
Route::get('/gestion_produit/search_pro',[ProduitController::class,'search'])->name('search');


                // modifier un prouduit
Route::post('/gestion_produit/{id_produit}',[ProduitController::class,'edit'])->name('edit');
Route::put('/gestion_produit/{id_produit}',[ProduitController::class,'update']);
Route::get('/gestion_produit/update_pro',[ProduitController::class,'updatePro'])->name('update');;

                // lister un prouduit
Route::get('/gestion_produit/liste_pro',[ProduitController::class,'listePro'])->name('listePro');

                // supprimer un prouduit
Route::delete('/gestion_produit/delete{id_produit}',[ProduitController::class,'delete'])->name('delete');

// FIN DE GESTION DE PRODUIT
Auth::routes();

// Route pour afficher le formulaire d'inscription (GET)
Route::get('register', [RegisterController::class, 'showRegistrationForm'])
    ->name('register');

// Route pour traiter le formulaire d'inscription (POST)
Route::post('register', [RegisterController::class, 'register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Routes pour les rôles
Route::get('admin/dashboard', function() {
    return view('gestion_system.bilan_produit');
})->name('admin.ventes')->middleware('auth');

Route::get('caissier/dashboard', function() {
    return view('admin.ventes');
})->name('')->middleware('auth');

Route::get('magasinier/dashboard', function() {
    return view('bilan_produit.blade.php');
})->name('')->middleware('auth');

// Route home
Route::get('/', function () {
    return view('welcome');
})->name('home');
