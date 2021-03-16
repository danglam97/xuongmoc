<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function products()
    {
        return $this->belongsTo('App\Product');
    }
}
