<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }
}
