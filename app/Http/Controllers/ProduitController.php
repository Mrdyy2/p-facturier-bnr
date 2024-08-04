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

        return view("gestion_produit.create_pro");

    }

    public function listePro(){

        $produits= Produits::all();   
        $produits = Produits::paginate(4); // 15 éléments par page


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


}
