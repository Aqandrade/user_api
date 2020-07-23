<?php

namespace App\DAO;

abstract class Connection
{
    protected $pdo;

    public function __construct()
    {
        $host     = getenv('HOST');
        $dbname   = getenv('DBNAME');
        $port     = getenv('PORT');
        $user     = getenv('USER');
        $password = getenv('PASSWORD');

        $dsn = "mysql:host={$host};dbname=${dbname};port={$port}";

        $this->pdo = new \PDO(
            $dsn,
            $user,
            $password
        );

        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );

    }
}