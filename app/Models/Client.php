<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vendeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        
        
    ];

    public function vendeur()
    {
    return $this->belongsTo(Vendeur::class);
    }

    public function users()
    {
        return $this->MorphMany(User::class,'userable');
    }
}
