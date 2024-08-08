<?php

namespace App\Http\Controllers;

use App\Http\Requests\filterRequest;
use App\Models\Produits;
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

    public function createProStore(filterRequest $request){

        $data =$request;
        $produits= Produits::create([ 
            'product_name' => request('nomProduit'),
            'quantiteStock'=> request('quantiteStock'),
            'price'=> request('price'),
            'date_entre'=> request('date'),
        ]);

        return redirect()->route('listePro')->with('success','le produit a ete enregistre');

    }

    public function listePro(){

        $produits= Produits::all();   
        $produits = Produits::paginate(7); // 15 éléments par page


        return view("gestion_produit.liste_pro", ['produits'=> $produits]);
    }


    public function updatePro(){

        
        return view('gestion_produit.update_pro');
    }


    public function delete($id_produit){

        $produits = Produits::find($id_produit);
        $produits->delete();

        return redirect("/gestion_produit/liste_pro");
    }

    public function edit($id_produit){

        $produits= Produits::find($id_produit);

        return view('/gestion_produit/update_pro',compact('produits'));
       //return  dd($produits);
    } 


    public function  update(Request $request){

        $produits = Produits::find($request->id_produit); 

        $produits->product_name=$request->nomProduit;
        $produits->price=$request->price;
        $produits->quantiteStock=$request->quantiteStock;
        $produits->date_entre=$request->date;
        $produits->save();
       // $produits->update($request->all());

        return redirect('/gestion_produit/liste_pro');

       //return dd($produits);

        
    }

    public function search(Request $request)
{
    $data = $request->input('search');

    // Utilisation de la méthode where() avec une chaîne interpolée pour la recherche
    $produit = Produits::where('product_name', 'like', '%' . $data . '%')->get();

    // Vérification si des résultats ont été trouvés
    if ($produit->isEmpty()) {
        // Aucun résultat trouvé, vous pouvez afficher un message à l'utilisateur
        return view('gestion_produit.search_pro')->with('message', 'Aucun produit trouvé.');
    } else {
        return view('gestion_produit.search_pro')->with('produit', $produit);
    }
}


}
