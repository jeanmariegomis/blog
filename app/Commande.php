<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function reglements()
    {
        return $this->hasMany('App\Reglement');
    }
}
