<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pigiste extends Model
{
    use HasFactory;

    public function contrats()
    {
        return $this->hasMany('App\Contrat');
    }

    protected $fillable =[
        'nom','prenom','adresse','cp','ville','mail','tel','securitesociale','contratcadre'
    ];
}

