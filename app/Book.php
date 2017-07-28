<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function chapters()
    {
        return $this->hasMany('App\Chapter');
    }

    public function affiliates()
    {
        return $this->hasMany('App\Affiliate');
    }
	
	public function firstChapter() {
		return $this->chapters()->orderBy('order', 'asc')->first()->order;
	}
	
	public function allChapters() {
		return $this->chapters()->orderby('order', 'asc')->pluck('order');
	}
	
	use \web_helpers;
	
	public function web_pageTitle($site_name = FALSE) {
		return $this->page_title($site_name, [$this->title . ' by ' . $this->author]);
	}
	
	public function web_url() {
		return route('book', ['id' => $this->id]);
	}
	
	public function web_image() {
		return $this->background_image;
	}
	
	public function web_description() {
		$descr = preg_replace('/<a .+?<\/a>/', '', $this->description);
		$descr = preg_replace('/<blockquote>.+<\/blockquote>/', '', $descr);
		return strip_tags($descr);
	}
}
