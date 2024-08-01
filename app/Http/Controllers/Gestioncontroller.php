<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Factures;

class Gestioncontroller extends Controller
{
    //gestion des factures

    public function app(){
        $facture = [];
        $nbre_facture = Factures::count();
        // if (($facture!= null)) {
        //     # si la table facture n'est pas vide...
        //     $nbre_facture= $facture;
        // }
        return view("gestion_system.bilan_vente",["nbre_facture"=> $nbre_facture]);
    }

    public function main(){
        return view("gestion_system.index");
    }


}
