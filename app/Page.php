<?php

namespace App;

/**
 * Description of Page
 *
 * @author aurimas
 */
class Page {
	use \web_helpers;

	public static function create() {
		return new self();
	}

	public function web_page_title($site_name = FALSE) {
		return $this->page_title($site_name, []);
	}

	public function web_url() {
		return route('home');
	}

	public function web_image() {
		return url('assets/featured-logo.png');
	}

	public function web_description() {
		return 'Read free, beautifully formatted public domain books online.';
	}
}
