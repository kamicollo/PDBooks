<?php

namespace App;

/**
 * Description of Page
 *
 * @author aurimas
 */
class Error {
	use \web_helpers;

	public static function create() {
		return new self();
	}

	public function web_page_title($site_name = FALSE) {
		return $this->page_title($site_name, ['404']);
	}

	public function web_url() {
		return url('404');
	}

	public function web_image() {
		return url('assets/404.png');
	}

	public function web_description() {
		return 'Oh dear! Oh dear! The page you are looking for cannot be found.';
	}
}
