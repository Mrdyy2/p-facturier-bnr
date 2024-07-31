<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Gestioncontroller;
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

// ceci recence les routes propres au module de gestion du systeme

Route::get('/index',[Gestioncontroller::class,'main']);

Route::get('/Bventes',[Gestioncontroller::class,'app']);

