<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    public function pigiste()
    {
        return $this->belongsTo('App\Models\Pigiste');
    }
    public function magazine()
    {
        return $this->belongsTo('App\Models\Magazine');
    }
    //protected &fillable ={
    //   'lettreaccord','etat','agessa','facture','brut','net','datepaiement','pigiste_id','magazine_id'
   // };
    protected $fillable = ['lettreaccord', 'etat', 'agessa', 'facture', 'montant', 'montantn', 'datepaiement', 'numpigiste', 'nummagazine'];
}