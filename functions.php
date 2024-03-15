<?php

/**
 * Function to preformat `var_dump()` results.
 * @return void
 */
function pre_dump($variable, $option = false): void {
	echo '<pre style="background: #151515; border-radius: 8px; color: #ffffff; padding: 8px;">';
	var_dump($variable);
	echo '</pre>';

	if ($option) {
		die();
	}
}