<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notation extends Model
{
    use HasFactory;

     // Recuperer les infos du produit qui a ete note
     public function produit()
     {
         return $this->belongsTo(Produit::class);
     }
     // Recuperer les infos du user qui a fait la note
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
