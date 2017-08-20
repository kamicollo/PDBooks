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
	
	public function getReadingTime() {
		$text = strip_tags($this->description);
		return str_word_count($text) / 250;
	}
	
	use \web_helpers;
	
	public function web_pageTitle($site_name = FALSE) {
		return $this->page_title(
			$site_name,
			[
				$this->title, 
				$this->book()->first()->title . ' by ' . $this->book()->first()->author
			]
		);
	}
	
	public function web_url() {
		return route('chapter', ['id' => $this->book()->first()->id, 'order' => $this->order]);
	}
	
	public function web_image() {
		return $this->book()->first()->background_image;
	}
	
	public function web_description() {
		$descr = str_replace(["\n", "\t", "\r"], " ", trim(strip_tags($this->description)));
		$descr = preg_replace('#\s+#', " ", $descr);
		//Regex from: https://stackoverflow.com/questions/1231959/180-first-characters-of-a-string-ending-with-a-word
		$m = preg_match("/^.{1,200}\b(?<!\s)/", $descr, $matches);
		if ($m) {
			return $matches[0] . '…';
		} else {
			return '';
		}
	}
	
}
