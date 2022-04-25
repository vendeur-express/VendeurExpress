<?php

namespace App\Models;

use App\Models\User;
use App\Models\Jaime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    // Recuperer les jaime de cet commentaire
    public function jaimes()
    {
        return $this->hasMany(Jaime::class);
    }

    // Recuperer les infos du user qui a commentee
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Recuperer les infos du post qui a ete commentee
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
