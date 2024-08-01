<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //


    public function new(){
        return view("gestion_produit.new");
    }

    public function createPro(){
        return view("gestion_produit.create_pro");
    }

    public function listePro(){
        return view("gestion_produit.liste_pro");
    }

}
