<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom_client',
        'pnom_client',
        'num_compte',
        'nom_compte',
        'nom_bank',
        'date_enregistment'
    ];

}
