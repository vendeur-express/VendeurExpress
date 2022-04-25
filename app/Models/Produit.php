<?php

namespace App\Models;

use App\Models\Pay;
use App\Models\Image;
use App\Models\Marque;
use App\Models\Partage;
use App\Models\Attribut;
use App\Models\Commande;
use App\Models\Favorite;
use App\Models\Notation;
use App\Models\Etiquette;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    // Recuperer la lite de commande contenant cet produit
    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }
    // Recuperer toutes les categories ayant cet produit
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
    // Recuperer toutes les images de cet produit
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    // Recuperer tous les attributs de cet produit
    public function attributs()
    {
        return $this->belongsToMany(Attribut::class);

    }
    // Recuperer toutes les pays ayant cet produit
    public function pays()
    {
        return $this->belongsToMany(Pay::class);
    }
    // Recuperer toutes les notation de cet produit
    public function notations()
    {
        return $this->hasMany(Notation::class);
    }

    // Recuperer tous les favorites contenant cet produit
    public function favorites()
    {
        return $this->belongsToMany(Favorite::class);
    }
    // Recuperer toutes les partages de cet produit
    public function partages()
    {
        return $this->hasMany(Partage::class);
    }

     // Recuperer tous les ettiquettes de cet produit
     public function ettiquettes()
     {
         return $this->belongsToMany(Etiquette::class);
     }
      // Recuperer tous les marques de cet produit
    public function marques()
    {
        return $this->belongsToMany(Marque::class);
    }

}
