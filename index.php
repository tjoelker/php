<?php

require_once 'Database.php';

require 'classes.php';
require 'functions.php';
require 'router.php';

$config = require 'config.php';

$database = new Database($config['database']);

// In the below statement, `query()` is executed first and it's result is then processed by `fetchAll()`.
// pre_dump($database->query("SELECT * FROM core where id = :id ", ['id' => 2])->fetchAll());
