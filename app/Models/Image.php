<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;


    protected $fillable = [
        'alt_img',
        'url_img',
        'type_img',
    ];
    // recuperer tous les services commandes
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    // Recuperer toutes les categories ayant cette image
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
    // Recuperer toutes les users ayant cette image
    public function users()
    {
        return $this->hasMany(User::class);
    }
    // Recuperer toutes les produit ayant cette image
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
    // Recuperer toutes les categories ayant cette image
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}