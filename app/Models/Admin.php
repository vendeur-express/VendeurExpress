<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'Code_ad', 
    ];
    public function users()
    {
        return $this->MorphMany(User::class,'userable');
    }
}
