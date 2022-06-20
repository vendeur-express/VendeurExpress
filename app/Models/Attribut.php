<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribut extends Model
{
    use HasFactory;
    // Recuperer la liste des produits ayant cet attribut

    protected $fillable = [
        'label_at',
        'dsc_at',
    ];
    protected $with = ['attributeValues'];

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
}