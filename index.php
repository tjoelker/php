<?php

require 'functions.php';

// * START * prototyping code

// Numbers
$integer = 7;
$floating_point = 1.337;

// String(s)
$string = "Hello World";
$string_numeric = "1e3"; // Will be displayed as a string
$string_numeric = 1 + "1e3"; // Will be displayed as a integer, because a arithmetic operation gets carried out, because the string value can be parsed as an integer

// Boolean(s)
$boolean = true;
function boolean($parameter): string {
	if ($parameter) {
		return 'The variable is truthy!';
	} else {
		return 'The variable is falsy...';
	}
};
$function = 'boolean'($boolean);
$function_alt = $boolean ? 'The variable is truthy!' : 'The variable is falsy...';

// Array(s)
$array = array(
	$string, 
	$boolean,
);
$array = [
	'key' => $string,
	$boolean,
];
$discography = [
	[
		'artist' => 'Acronym',
		'title' => 'June',
		'year' => 2015,
		'link' => 'https://www.discogs.com/master/856972-Acronym-June',
	],
	[
		'artist' => 'Djrum',
		'title' => 'Broken Glass Arch',
		'year' => 2017,
		'link' => 'https://www.discogs.com/master/1266757-Djrum-Broken-Glass-Arch',
	],
	[
		'artist' => 'Nthng',
		'title' => 'Earthseed',
		'year' => 2022,
		'link' => 'https://www.discogs.com/master/2766407-Nthng-Earthseed',
	],
	[
		'artist' => 'Nthng',
		'title' => 'It Never Ends',
		'year' => 2017,
		'link' => 'https://www.discogs.com/master/1151915-Nthng-It-Never-Ends',
	],
];
function filter($data, $function): array {
	$filtered_data = [];

	foreach ($data as $item) {
		if ($function($item)) {
			$filtered_data[] = $item;
		}
	}
	
	return $filtered_data;
};
$filtered_discography = array_filter($discography, function ($item) {
	return $item['year'] < 2020;
});
$filtered_discography = array_filter($discography, fn($item) => $item['year'] < 2020);

$name = 'Dynamo';
$uuid = 1337;

$profile = [
	'name' => $name,
	'uuid' => $uuid,
	'categories' => [
		'design',
		'development',
		'hosting',
	],
];
function looper($data) {
	echo "<ul class='profile'>";

	foreach ($data as $key => $value) {
	// e.g. $profile as 'name' => $name
		if (!(gettype($value) === 'array')) {
			echo "<li>$key</li>";
		} else {
			echo "<li>$key</li><ul>";

			foreach ($value as $nested_value) {
				echo "<li>$nested_value</li>";
			}

			echo "</ul></li>";
		}
		echo "</li>";
	}
	echo "</ul>";
}

$object = (object)[];

// The variable that will be parsed into the DOM, inside `index.view.php`
$render = NULL; // Set to NULL because it's not used at the moment.

// * END * prototyping code

$extra = $_SERVER['REQUEST_URI'] === '/' ? 'Where at homebase' : 'Where the f*ck are we?';

$page_name = 'Home';

require 'view/index.view.php';