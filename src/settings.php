<?php
/**
 * User: jeckel
 * Date: 27/03/19
 * Time: 08:57
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('APP_ROOT', __DIR__);

return [
    'settings' => [
        'displayErrorDetails' => true,
        // Monolog settings
        'logger' => [
            'name'  => 'Sample-CI',
            'path'  => 'php://stdout',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
