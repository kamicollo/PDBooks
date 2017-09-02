<?php

namespace App;

/**
 * Description of Page
 *
 * @author aurimas
 */
class About {
	use \web_helpers;

	public static function create() {
		return new self();
	}

	public function web_page_title($site_name = FALSE) {
		return $this->page_title($site_name, ['About']);
	}

	public function web_url() {
		return route('about');
	}

	public function web_image() {
		return url('assets/featured-logo.png');
	}

	public function web_description() {
		return 'LaikaReads publishes books that are in public domain in the United States.';
	}
}
