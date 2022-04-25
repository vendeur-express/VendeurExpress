<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Commande;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
// Recupere les infos de l'utilisateur dont appartient le service
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // recuperer tous les services commandes
    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }

    // recuperer tous les image du services
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }
    // recuperer tous les categories du service
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
