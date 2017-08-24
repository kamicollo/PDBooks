<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
		return '';
	}
	
	public function web_description() {
		return '';
	}
}
