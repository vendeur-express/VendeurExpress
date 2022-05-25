<?php

namespace App\Models;

use App\Models\User;
use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demarcheur extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_dem',
        'cnib_dem',
        'pays_dem',
        'ville_dem',
        'sexe_dem',
        'annee_naisse_dem',
        'type_paiement',
        'numero_compte_dem',
    ];

    public function users()
    {
        return $this->MorphMany(User::class, 'userable');
    }

    public function fournisseurs()
    {
        return $this->hasMany(Fournisseur::class);
    }
}