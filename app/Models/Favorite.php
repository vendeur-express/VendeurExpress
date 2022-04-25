<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;
    // Recuperer toutes les infos du user dont appartient la favorite
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Recuperer tous les produits de cet favorie
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}
