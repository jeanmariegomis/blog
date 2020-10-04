<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function commandes()
    {
        return $this->hasMany('App\Commande');
    }
}
