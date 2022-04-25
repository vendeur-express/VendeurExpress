<?php

namespace App\Models;

use App\Models\User;
use App\Models\Demarcheur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->MorphMany(User::class,'userable');
    }

    public function demarcher()
    {
       return $this->belongsTo(Demarcheur::class);
    }
}
