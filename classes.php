<?php

$folder = 'classes/';

foreach (array_diff(scandir($folder), ['.', '..']) as $class) {
	require "{$folder}/{$class}";
}