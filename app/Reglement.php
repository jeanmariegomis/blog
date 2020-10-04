<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }
 
    public function commande()
    {
        return $this->belongsTo('App\Commande');
    }
}
