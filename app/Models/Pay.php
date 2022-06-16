<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pay extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_pay',
        'code_zip_pay',
    ];
    // Recuperer toutes les produits appartenant a ce pays
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }

    // Recuperer toutes les villes de cet pays
    public function villes()
    {
        return $this->hasMany(Ville::class);
    }
}
