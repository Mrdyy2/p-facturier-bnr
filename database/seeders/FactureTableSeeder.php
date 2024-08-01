<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FactureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //injections des donnees ala base de donnees produits pour les tests en utilisant les seeders
        DB::table("factures")->insert([
            'numero_facture'=> Str::random(5),
            'nom_client'=> Str::random(5) ,
            'pnom_client'=> Str::random(5),
            'num_compte'=> 12345,
            'nom_compte'=> Str::random(10),
            'nom_bank'=> Str::random(10),
        ]);
    }
}
