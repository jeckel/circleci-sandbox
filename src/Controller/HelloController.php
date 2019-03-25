<?php
/**
 * Created by IntelliJ IDEA.
 * User: jeckel
 * Date: 25/03/19
 * Time: 09:03
 */
namespace App\Controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HelloController
{
    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function hello(Request $request, Response $response, array $args = []): Response
    {
        if (empty($args['name'])) {
            $response->getBody()->write("Hello World");
        } else {
            $name = ($args['name'] == 'bob') ? 'Bob Marley' : $args['name'];
            $response->getBody()->write("Hello, $name");
        }

        return $response;
    }
}
