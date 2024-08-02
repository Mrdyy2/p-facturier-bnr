<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Factures;

class Gestioncontroller extends Controller
{

    //fonction pour l'ouverture de la page principale
    public function main(){
        return view("gestion_system.index");
    }
    
    //gestion des ventes
    
    //ouverture de la page de gestion des ventes
    public function ventesPages(){
        $facture = [];
        $nbre_facture = Factures::count();
        return view("gestion_system.bilan_vente",["nbre_facture"=> $nbre_facture]);
    }

    //gestion des produits

    //ouverture de la page principale de gestion des produits
    public function produit(){
        return view("gestion_system.bilan_produit");
    }


}
