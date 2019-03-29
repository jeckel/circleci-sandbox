<?php
namespace App\Core;

use App\Controller\HelloController;
use App\Repository\UserRepository;
use App\Repository\UserRepositoryInterface;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;

/**
 * Class App
 * @package App\Core
 */
class App extends \Slim\App
{
    /**
     * App constructor.
     * @param array $container
     */
    public function __construct($container = [])
    {
        parent::__construct($container);
        $this->registerDependencies();
        $this->registerRoutes();
    }

    /**
     * @return $this
     */
    protected function registerRoutes()
    {
        $this->get('/hello[/{name}]', HelloController::class);
        return $this;
    }

    /**
     * @return $this
     */
    protected function registerDependencies()
    {
        // DIC configuration
        $container = $this->getContainer();

        // monolog
        $container['logger'] = function (ContainerInterface $c) {
            $settings = $c->get('settings')['logger'];
            $logger = new Logger($settings['name']);
            $logger->pushProcessor(new UidProcessor());
            $logger->pushHandler(new StreamHandler($settings['path'], $settings['level']));
            return $logger;
        };

        // Repositories
        $container[UserRepositoryInterface::class] = function () {
            return new UserRepository();
        };

        return $this;
    }
}
