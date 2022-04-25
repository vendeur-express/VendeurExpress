<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marque extends Model
{
    use HasFactory;

    // Recuperer tous les produits de cette marque
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}
