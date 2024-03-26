<?php

$config = require 'config.php';
$database = new Database($config['database']);
$notes = $database->query('SELECT * FROM notes')->fetchAll();

require 'views/notes.view.php';