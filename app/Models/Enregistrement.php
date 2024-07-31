<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enregistrement extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_produit',
        'id_facture',
    ] ;
}
