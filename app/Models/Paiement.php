<?php

namespace App\Models;

use App\Models\Commande;
use App\Models\ModePaiement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

    public function mode_paiement()
    {
        return $this->belongsTo(ModePaiement::class);
    }
}
