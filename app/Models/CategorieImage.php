<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategorieImage extends Pivot
{
    protected $fillable = [
        'categorie_id',
        'image_id'
    ];
}
