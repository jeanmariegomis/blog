<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }
 
    public function fournisseur()
    {
        return $this->belongsTo('App\Fournisseur');
    }
 
    public function reglements()
    {
        return $this->hasMany('App\Reglement');
    }
}
