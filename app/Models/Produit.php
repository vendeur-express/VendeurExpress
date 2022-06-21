<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Pay;
use App\Models\Image;
use App\Models\Marque;
use App\Models\Partage;
use App\Models\Attribut;
use App\Models\Commande;
use App\Models\Favorite;
use App\Models\Notation;
use App\Models\Etiquette;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'label_pro' ,
        'dsc_pro' ,
        'prix_pro',
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->code_pro)) {
                $test = true;
                $key = "";
                while ($test == true) {
                    $uuid = Str::uuid();
                    $key = explode('-', $uuid)[count(explode('-', $uuid)) - 1];
                    if (Produit::where('code_pro', $key)) {
                        $test = false;
                    }
                }
                $model->code_dem = $key;
            }
        });
    }
    // Recuperer la lite de commande contenant cet produit
    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }
    // Recuperer toutes les categories ayant cet produit
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
    // Recuperer toutes les images de cet produit
    public function images()
    {
        return $this->belongsToMany(Image::class);
        
    }

    // Recuperer tous les attributs de cet produit
    public function product_option()
    {
        return $this->belongsToMany(ProductOption::class);
    }
    // Recuperer toutes les pays ayant cet produit
    public function pays()
    {
        return $this->belongsToMany(Pay::class);
    }
    // Recuperer toutes les notation de cet produit
    public function notations()
    {
        return $this->hasMany(Notation::class);
    }

    // Recuperer tous les favorites contenant cet produit
    public function favorites()
    {
        return $this->belongsToMany(Favorite::class);
    }
    // Recuperer toutes les partages de cet produit
    public function partages()
    {
        return $this->hasMany(Partage::class);
    }

    // Recuperer tous les ettiquettes de cet produit
    public function ettiquettes()
    {
        return $this->belongsToMany(Etiquette::class);
    }
    // Recuperer tous les marques de cet produit
    public function marques()
    {
        return $this->belongsToMany(Marque::class);
    }
}