<?php

namespace App\Models;

use App\Models\User;
use App\Models\Fournisseur;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demarcheur extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_dem',
        'cnib_dem',
        'pays_dem',
        'ville_dem',
        'sexe_dem',
        'annee_naisse_dem',
        'type_paiement',
        'numero_compte_dem',
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->code_dem)) {
                $test = true;
                $key = "";
                while ($test == true) {
                    $uuid = Str::uuid();
                    $key = explode('-', $uuid)[count(explode('-', $uuid)) - 1];
                    if (Demarcheur::where('code_dem', $key)) {
                        $test = false;
                    }
                }
                $model->code_dem = $key;
            }
        });
    }
    public function users()
    {
        return $this->MorphMany(User::class, 'userable');
    }

    public function fournisseurs()
    {
        return $this->hasMany(Fournisseur::class);
    }
}