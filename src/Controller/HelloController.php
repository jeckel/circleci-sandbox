<?php
/**
 * User: jeckel
 * Date: 25/03/19
 * Time: 09:03
 */
namespace App\Controller;

use App\Repository\UserRepositoryInterface;
use Psr\Container\ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

/**
 * Class HelloController
 * @package App\Controller
 */
class HelloController implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    /** @var ContainerInterface */
    protected $container;

    /** @var UserRepositoryInterface */
    protected $userRepository;

    /**
     * HelloController constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->logger = $this->container->get('logger');
        $this->userRepository = $this->container->get(UserRepositoryInterface::class);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function __invoke(Request $request, Response $response, array $args = []): Response
    {
        $this->logger->info('Say Hello controller');
        if (empty($args['name'])) {
            $response->getBody()->write("Hello World");
        } else {
            $user = $this->userRepository->findByLogin($args['name']);
            $response->getBody()->write("Hello, {$user->getDisplayName()}");
        }

        return $response;
    }
}
