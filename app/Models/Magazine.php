<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;

    public function contrats()
    {
        return $this->hasMany('App\Contrat');
    }

    protected $fillable = ['bouclage', 'sortie', 'paiement', 'budget'];
}