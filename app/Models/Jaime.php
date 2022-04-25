<?php

namespace App\Models;

use App\Models\User;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jaime extends Model
{
    use HasFactory;

    // Recupererles infos du user qui a aimee
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Recupererles infos du commentaire qui a ete aimee
    public function comment()
    {
        return $this->belongsTo(Commentaire::class);
    }
}
