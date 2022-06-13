<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategorieImage extends Pivot
{
    protected $fillable = [
        'categories_id',
        'images_id'
    ];
}
