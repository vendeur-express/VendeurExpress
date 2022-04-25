<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Produit;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    // recuperer tous les services ayant cette categorie
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    // recuperer tous les images de cette categorie
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }
    // recuperer tous les produit ayant cette categorie
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }


}
