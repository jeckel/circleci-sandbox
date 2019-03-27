<?php
include '../c3.php';

require __DIR__ . '/../vendor/autoload.php';
session_start();
// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';

$app = new \App\Core\App($settings);

// Run app
$app->run();
