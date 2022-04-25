<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produit;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory,SoftDeletes;


    // Recuperer la liste de toud les paiement realisee pour cette commande
    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
    // recuperer les infos de l'utilisateur dont appartient la commande
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    // recuperer tous les services de cette commande
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    // recuperer tous les produits de cette commande
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}

