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

    public function getUserById(Request $request, Response $response, array $args)
    {
        $userDao = new UserDAO();

        $user = $userDao->getUserById($args['id']);

        if(!empty($user)){
            return $response->withJson($user);
        }else{
            return $response->withJson(["mensagem" => "Usuário não encontrado"],404);
        }
    }

    public function deleteUser(Request $request, Response $response, array $args)
    {
        $userDao = new UserDAO();

        $userDao->deleteUser($args['id']);

        return $response->withJson(["mensagem" => "Usuário deletado com sucesso"]);
        
    }

}