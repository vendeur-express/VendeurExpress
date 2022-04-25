<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribut extends Model
{
    use HasFactory;
    // Recuperer la liste des produits ayant cet attribut
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}
