<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointLivraison extends Model
{
    use HasFactory;
    protected $fillable = [
    'code_bout',
    'desc',
    'longitude',
    'latitude',
    ];
}
