<?php

namespace App\Models;

use App\Models\Pay;
use App\Models\Livraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;

    // Recuperer les infos du pays dont appartient cette ville
    public function pay()
    {
        return $this->belongsTo(Pay::class);
    }

    // Recuperer tous les point de livraison de cette ville
    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }
}
