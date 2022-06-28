<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Droit;
use App\Models\Image;
use App\Models\Jaime;
use App\Models\Service;
use App\Models\Commande;
use App\Models\Favorite;
use App\Models\Notation;
use App\Models\Commentaire;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**   
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'identifiant_us',
        'nom_us',
        'prenom_us', 
        'email_us',
        'tel_us',
        'email_verified_at_us',
        'password_us', 
        'image_id',
        'userable_type',
        'userable_id',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password_us',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // recuperer le type d'utilisateur
    public function userable()
    {
        return $this->morphTo();
    }
    // recuperer tous les coupons d'un utilisateur
    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }
    // recuperer tous les commandes d'un utilisateur
    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }
    // recuperer tous les services d'un utilisateur
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    // Recupererles infos de l'image du user
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    // Recupererles la liste des j'aime du user
    public function jaimes()
    {
        return $this->hasMany(Jaime::class);
    }
    // Recuperer les commentaire de cet user
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    // Recuperer toutes les post de cet user
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    // Recuperer toutes les notation de cet user
    public function notations()
    {
        return $this->hasMany(Notation::class);
    }

    // Recuperer toutes les favories de cet user
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function droits()
    {
        return $this->belongsToMany(Droit::class);
    }
}