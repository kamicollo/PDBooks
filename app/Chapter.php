<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo('App\Book');
    }

    public function isNext() {
        return true;
        $this->book()->get()->chapters()->min('order') == $this->order;
    }

    public function isPrevious() {
        return false;
        $this->book()->chapters()->max('order') == $this->order;
    }
}
