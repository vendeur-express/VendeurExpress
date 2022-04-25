<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etiquette extends Model
{
    use HasFactory;

    // Recuperer tous les produits ayant cet ettiquette
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}
