<?php

namespace App\Auth;

use App\Db\Database;

class Auth
{
    /**
     * Registra Novo Usuário
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @return boolean
     */
    public static function register($name, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $database = new Database();
        $query = 'INSERT INTO user (nome, email, senha) VALUES (?,?,?)';
        $database->execute($query, [$name, $email, $hash]);

        return true;
    }

    /**
     * Login do Usuário
     *
     * @param string $email
     * @param string $password
     * @return boolean
     */
    public static function login($email, $password)
    {
        $database = new Database();
        $query = 'SELECT * FROM user WHERE email = ?';
        $result = $database->execute($query, [$email])->fetch();

        if ($result && password_verify($password, $result['senha'])) {
            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['nome'] = $result['nome'];
            return true;
        }
        return false;
    }
}
