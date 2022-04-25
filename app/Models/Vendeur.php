<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendeur extends Model
{
    use HasFactory;

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function users()
    {
        return $this->MorphMany(User::class,'userable');
    }
}
