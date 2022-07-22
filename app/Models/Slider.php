<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre_slid',
        'dsc_slid',
        'image_slid',
        'url_slid',
        'status'
    ];
    
}
