<?php

namespace App\DAO;

use App\Models\User as User;

class UserDAO extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsers()
    {
        $users = $this->pdo->query('SELECT * FROM usuario')
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $users;
    }

    public function getUserById($id)
    {
        $sth = $this->pdo->prepare('SELECT * FROM usuario WHERE id = :id');

        $sth->bindValue(':id',$id,\PDO::PARAM_INT);

        $sth->execute();

        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function deleteUser($id)
    {       
        $sth = $this->pdo->prepare('DELETE FROM usuario WHERE id = :id ');
        
        $sth->bindValue(':id',$id,\PDO::PARAM_INT);

        return $sth->execute();

    }

    public function updateUser(User $user,$id)
    {
        $sth = $this->pdo->prepare(
            "UPDATE
                usuario
            SET
                nome = ?,
                data_nascimento = ?
            WHERE
                id = ?"
        );

        $sth->execute([
            $user->getNome(),
            $user->getDataNascimento(),
            $id]);
    }
}