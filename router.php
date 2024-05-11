<?php

$URI = parse_url($_SERVER['REQUEST_URI'])['path'];

// 'Router' switch statement
// switch($URI) {
// 	case '/':
// 		require 'controllers/index.php';
// 		break;
// 	case '/about':
// 		require 'controllers/about.php';
// 		break;
// 	case '/contact':
// 		require 'controllers/contact.php';
// 		break;
// }

// 'Router' array (mapping)
$ROUTES = array(
	'/' => 'controllers/index.php',
	'/notes' => 'controllers/notes.php',
	'/notes/note' => 'controllers/note.php',
	'/about' => 'controllers/about.php',
	'/contact' => 'controllers/contact.php',
);

// My solution:

// foreach ($ROUTES as $path => $controller) {
// 	if ($URI === $path) {
// 		require $controller;
// 	}
// }

// Course solution:

/**
 * Router function.
 * @return void
 */
function router($uri, $routes): void
{
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	} else {
		abort();
	}
}

/**
 * Abort router function.
 * @return void
 */
function abort($code = 404): void
{
	http_response_code($code);

	require "views/{$code}.view.php";

	die();
}

router($URI, $ROUTES);
