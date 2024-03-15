<?php

require 'functions.php';

$URI = parse_url($_SERVER['REQUEST_URI'])['path'];

pre_dump($_SERVER['REQUEST_URI']);

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
if (array_key_exists($URI, $ROUTES)) {
	require $ROUTES[$URI];
} else {
	http_response_code(404);

	echo '404: Page not found.';
	die();
}