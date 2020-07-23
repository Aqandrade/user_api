<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;

use Psr\Http\Message\ResponseInterface as Response;

use App\DAO\UserDAO as UserDAO;

class UserController
{

    public function getUsers(Request $request, Response $response, array $args)
    {
        $userDao = new UserDAO();

        return $response->withJson($userDao->getUsers());

    }

}