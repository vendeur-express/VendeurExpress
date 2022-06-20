<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;
    protected $fillable = [
        'option',
        'produits_id',
    ];
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}