<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gestioncontroller extends Controller
{
    //

    public function app(){
        return view("gestion_system.bilan_vente");
    }

    public function main(){
        return view("gestion_system.index");
    }


}
