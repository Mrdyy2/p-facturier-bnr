<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $nbre_facture = Factures::count();
        return view("gestion_system.bilan_vente",["nbre_facture"=> $nbre_facture]);
    }

    //gestion des produits

    //ouverture de la page principale de gestion des produits
    public function produit(){
        return view("gestion_system.bilan_produit");
    }

    //ouverture de la page sur les utilisateurs magasinier
    public function bilan_magasinier(){
        return view("gestion_system.bilan_users.liste_magasinier");
    }

    //ouverture de la page sur les utilisateurs caissieres
    public function bilan_caissiere(){
        return view("gestion_system.bilan_users.liste_caissieres");
    }
//ajout d'utilisateurs
    public function add_user(Request $request){
        $name = $request->input('name');
        $subname = $request->input('subname');
        $email = $request->input('email');
        $role = $request->input('role');
        
        // @dd($request);
        $request->validate([
            'name' => 'required',
            'subname' => 'required',
            'role' => 'required',
            'email' => 'required|unique:users',
            'password',
        ]);
        // Créez un nouvel utilisateur dans la base de données
        $user = new User();
        $user->name = $name;
        $user->subname = $subname;
        $user->email = $email;
        $user->idRole = $role;
        $user->save();
        
        // Redirigez l'utilisateur vers une page de confirmation ou de connexion
        return redirect()->route('admin.users.main')->with('success', 'Compte créé avec succès !');
    }

    public function add_user_page(){
        return view("gestion_system.bilan_users.ajout_users");
    }


}
