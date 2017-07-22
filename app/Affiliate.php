<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
