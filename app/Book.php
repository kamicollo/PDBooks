<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
	public function getRouteKeyName() {
		return 'url_slug';
	}

	public function chapters() {
		return $this->hasMany('App\Chapter');
	}

	public function firstChapter() {
		return $this->chapters()->orderBy('order', 'asc')->first()->order;
	}

	public function allChapters() {
		return $this->chapters()->orderby('order', 'asc')->pluck('order');
	}

	public function firstParagraph() {
		try {
			$content = $this->chapters()->orderBy('order', 'asc')->first()->content;
			$dom = new \DOMDocument();
			$dom->loadHTML('<?xml encoding="utf-8" ?>' . $content);
			$xp = new \DOMXPath($dom);
			$res = $xp->query('//p');
			return $res[0]->nodeValue;
		} catch (\ErrorException $e) {
			return '';
		}
	}

	public function affiliates() {
		return $this->hasMany('App\Affiliate');
	}

	public function countryCode() {
		switch($this->country) {
			case "United Kingdom":
				return "gb";
				break;
			case "United States":
				return "us";
				break;
			default:
				return "";
				break;
		}
	}

	public function getGoodreadsAvgRating($value) {
		return round($value, 2);
	}

	use \web_helpers;

	public function web_page_title($site_name = FALSE) {
		return $this->page_title($site_name, [$this->title . ' by ' . $this->author]);
	}

	public function web_url() {
		return route('book', [$this->getRouteKey()]);
	}

	public function web_image() {
		return $this->web_cover_image();
	}

	public function web_description() {
		return strip_tags($this->description);
	}

	public function web_star_rating() {
		$fraction = $this->goodreads_avg_rating - floor($this->goodreads_avg_rating);

		$full_stars = array_fill(0, floor($this->goodreads_avg_rating), 'gfc-p10');
		if ($fraction > 0 && $fraction < 0.5) {
			$half_stars = ['gfc-p3'];
		} elseif ($fraction >= 0.5) {
			$half_stars = ['gfc-p6'];
		} else {
			$half_stars = ['gfc-p0'];
		}
		$empty_stars = array_fill(0, 4 - floor($this->goodreads_avg_rating), 'gfc-p0');

		return array_merge($full_stars, $half_stars, $empty_stars);
	}

	public function web_cover_image() {
		$cover_path = 'images/' . $this->url_slug . '/cover.jpg';
		$default_cover_path = 'assets/cover.jpg';

		if (file_exists(public_path($cover_path))) {
			return $cover_path;
		} else {
			return $default_cover_path;
		}
	}

	public function web_background_image() {
		$svg_path = 'images/' . $this->url_slug . '/background.svg';
		$png_path = 'images/' . $this->url_slug . '/background.png';
		$jpg_path = 'images/' . $this->url_slug . '/background.jpg';

		if (file_exists(public_path($svg_path))) {
			return $svg_path;
		} elseif (file_exists(public_path($png_path))) {
			return $png_path;
		} elseif (file_exists(public_path($jpg_path))) {
			return $jpg_path;
		} else {
			return "";
		}
	}

	public function web_portrait_image() {
		$portrait_path = 'images/' . $this->url_slug . '/portrait.jpg';

		if (file_exists(public_path($portrait_path))) {
			return $portrait_path;
		} else {
			return "";
		}
	}

	public function web_signature_image() {
		$signature_path = 'images/' . $this->url_slug . '/signature.png';

		if (file_exists(public_path($signature_path))) {
			return $signature_path;
		} else {
			return "";
		}
	}
}
