<?php
/**
 * User: jeckel
 * Date: 27/03/19
 * Time: 08:58
 */

use \Psr\Container\ContainerInterface;
use \App\Repository\UserRepositoryInterface;
use App\Repository\UserRepository;

// DIC configuration
$container = $app->getContainer();

// monolog
$container['logger'] = function (ContainerInterface $c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$container[UserRepositoryInterface::class] = function () { return new UserRepository(); };
