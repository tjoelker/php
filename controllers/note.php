<?php

$uuid = $_GET['uuid'];
$config = require 'config.php';
$database = new Database($config['database']);
$note = $database->query('SELECT * FROM notes where user_id = ?', [$uuid])->fetch();
$user = $database->query('SELECT * FROM users where uuid = ?', [$uuid])->fetch();
$heading = "Note #{$uuid}";

require 'views/note.view.php';
