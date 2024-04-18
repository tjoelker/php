<?php

/**
 * Function to preformat `var_dump()` results.
 * @return void
 */
function pre_dump($variable, $option = false): void 
{
	echo '<pre style="background: #1E201C; border-radius: 8px; color: #ffffff; margin: 16px 0; padding: 8px;">';
	var_dump($variable);
	echo '</pre>';

	if ($option) {
		die();
	}
}