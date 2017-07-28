<?php

trait web_helpers {
	
	protected function page_title($show_site_name = FALSE, $elements = []) {
		
		if ($show_site_name) {
			$elements[] = 'Laika Reads';
		}
		return implode(' | ', $elements);
	}
	
}



