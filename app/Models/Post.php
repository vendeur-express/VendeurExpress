<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Video;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'label_pos',
        'dsc_pos',
        'users_id',
         ];
    // Recuperer toutes les images de cet post
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }
    // Recuperer toutes les commentaires de cet post
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

     // Recuperer toutes les videos de cet post
     public function videos()
     {
         return $this->belongsToMany(Video::class);
     }

      // Recuperer toutes les infos de users qui a fait le post
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
