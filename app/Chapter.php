<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;


class Chapter extends Model
{
    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo('App\Book');
    }

    public function isNext() {
        return $this->book()->first()->chapters()->max('order') != $this->order;
    }

    public function isPrevious() {
        return $this->book()->first()->chapters()->min('order') != $this->order;
    }
	
	public function getNext() {
		return $this->book()->first()
			->chapters()->where('order', '>', $this->order)
			->orderBy('order', 'asc')->first()->order;
	}
	
	public function getPrevious() {
		return $this->book()->first()
			->chapters()->where('order', '<', $this->order)
			->orderBy('order', 'desc')->first()->order;
	}
}
