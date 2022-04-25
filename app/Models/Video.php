<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

     // Recuperer toutes les images de cet post
     public function images()
     {
         return $this->belongsToMany(Image::class);
     }
      // Recuperer toutes les post qui ont de cette video
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
