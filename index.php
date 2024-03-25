<?php

require_once 'Database.php';

require 'classes.php';
require 'functions.php';
require 'router.php';

// Connect to MySQL database:

$database = new Database;

// In the below statement, `query()` is executed first and it's result is then processed by `fetchAll()`.
pre_dump($database->query("SELECT * FROM core")->fetchAll(PDO::FETCH_ASSOC));
