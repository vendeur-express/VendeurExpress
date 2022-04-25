<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partage extends Model
{
    use HasFactory;

    // Recuperer le produit qui a ete partagee
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
    // Recuperer le user qui a fait le partage
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
