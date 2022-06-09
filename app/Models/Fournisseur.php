<?php

namespace App\Models;

use App\Models\User;
use App\Models\Demarcheur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;
    protected $fillable = [
        'cnib_four',
        'ville_four',
        'nom_boutique',
        'demarcheurs_id'
        
         ];
    public function users()
    {
        return $this->MorphMany(User::class,'userable');
    }

    public function demarcher()
    {
       return $this->belongsTo(Demarcheur::class);
    }
}
