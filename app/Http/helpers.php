<?php

trait web_helpers {

	protected function page_title($show_site_name = FALSE, $elements = []) {

		if ($show_site_name) {
			$elements[] = 'Laika Reads';
		}
		return implode(' | ', $elements);
	}

}

/**
 *
 * @param array $all - list of pages to be considered
 * @param integer $current_index - currently active page
 * @param integer $no_first - number of pages always show in the beginning and end (symmetric)
 * @param integer $no_mid - number of pages to show before/prior the current page
 * @param function $callback - callback function to apply on page item (assumed to generated required HTML).
 * Callback function will receive inputs as follows: function($current_index, $item, $active_index)
 * @param string $separator - separator string (will be passed to callback function with null index)
 * @return string
 */
function generate_pagination($all, $current_index, $no_first, $no_mid, $callback, $separator) {
	$total_items = count($all);
	$all_items = array_values($all);
	$max_visible =
		$no_first * 2 + // front- and end- items
		1 + $no_mid * 2 +  // current item + surrounding pre- & post-items
		+ ($no_first > 0 ? 2 : 0); // a separator for front and end items if any are shown
	if ($total_items <= $max_visible) {
		return
			array_map(
				$callback,
				range(1, $total_items),
				$all,
				array_fill(1, $total_items, $current_index)
			)
		;
	} else {
		$visible_items = [];
		$sep_active = false;
		for ($i = 1; $i <= $total_items; $i++) {
			if (
				($i <= $no_first) ||
				($i >= $total_items - ($no_first) + 1)
			) { //first and last items
				//echo $i . ' first or last item'  . "\n";
				$visible_items[] = $callback($i, $all[$i - 1], $current_index);
				$sep_active = false;
			} elseif (abs($i - $current_index) <= $no_mid) { //surrounding items
				//echo $i . ' surrounding item'  . "\n";
				$visible_items[] = $callback($i, $all[$i - 1], $current_index);
				$sep_active = false;
			} elseif (
				(($i <= $no_first + 1 + 2 * $no_mid + 1) && ($current_index < $no_first + 1 + 2 * $no_mid + 1)) ||
				(($i >= $total_items - ($no_first + 2 * $no_mid + 1)) && ($current_index > $total_items - ($no_first + 2 * $no_mid + 1)))
			) { //first and last items
				//echo $i . ' extended first or last item'  . "\n";
				$visible_items[] = $callback($i, $all[$i - 1], $current_index);
				$sep_active = false;
			}
			elseif (!$sep_active) { //separator case
				//echo $i . ' separator' . "\n";
				$visible_items[] = $callback(null, $separator, $current_index);
				$sep_active = true;
			} else {
				//echo "$i invisible \n";
			}
		}
		return $visible_items;
	}
}
