<?php

namespace App\Models;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livraison extends Model
{
    use HasFactory;

    // Recuperer les infos de la ville ou se trouve le point de livraison
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
}
