<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendeur extends Model
{
    
    use HasFactory;
protected $fillable = [
    'cnib_ven',
    'ville_ven' ,
    'annee_naisse_ven',
    'sexe_ven' ,
];
protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->code_ven)) {
                $test = true;
                $key = "";
                while ($test == true) {
                    $uuid = Str::uuid();
                    $key = explode('-', $uuid)[count(explode('-', $uuid)) - 1];
                    if (Demarcheur::where('code_ven', $key)) {
                        $test = false;
                    }
                }
                $model->code_ven = $key;
            }
        });
    }
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function users()
    {
        return $this->MorphMany(User::class,'userable');
    }
}
