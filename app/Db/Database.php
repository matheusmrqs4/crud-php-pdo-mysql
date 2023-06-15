<?php

namespace App\Db;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database
{
    /**
     * Instância da Conexão com o Banco de Dados
     *
     * @var PDO
     */
    private $connection;

    public function __construct()
    {
        $this->loadEnvironmentVariables();
        $this->setConnection();
    }

    /**
     * Método Responsável por carregar as variáveis de ambiente
     *
     * @return Dotenv
     */
    private function loadEnvironmentVariables()
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }

    /**
     * Método Responsável por criar a Conexão com o BD
     *
     * @return PDO
     */
    private function setConnection()
    {
        $dbHost = $_ENV['DB_HOST'];
        $dbName = $_ENV['DB_DATABASE'];
        $dbUser = $_ENV['DB_USER'];
        $dbPassword = $_ENV['DB_PASSWORD'];

        try {
            $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";
            $this->connection = new PDO($dsn, $dbUser, $dbPassword);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }


    /**
     * Método Responsável por EXECUTAR QUERIES dentro do BD
     * @param  string $query
     * @param  array  $params
     * @return PDOStatement
   */
    public function execute($query, $params = [])
    {
        try {
            $stm = $this->connection->prepare($query);
            $stm->execute($params);
            return $stm;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }


   /**
     * Método Responsável por INSERIR Dados no BD
     *
     * @param  array $values
     * @return integer ID inserido
   */
    public function insert($values)
    {

      //MONTA A QUERY
        $query = 'INSERT INTO registros (descricao, valor, data, status) 
                  VALUES (?,?,?,?)';

      //EXECUTA O INSERT (chamando o método execute, criado acima)
        $this->execute($query, array_values($values));
    }


    /**
     * Método que irá fazer o SELECT no BD
     *
     * @return PDOStatement
     */
    public function select($where = null)
    {
        //DADOS DA QUERY
        $where = strlen($where) ? ' WHERE ' . $where : '';

        //MONTA A QUERY
        $query = 'SELECT * FROM registros' . $where;

        //EXECUTA O SELECT (chamando o método execute, criado acima)
        return $this->execute($query);
    }


    /**
     * Método que irá fazer o UPDATE no BD
     *
     * @param string $where
     * @param array $values
     * @return boolean
     */
    public function update($where, $values)
    {
        //MONTA A QUERY
        $query = 'UPDATE registros SET descricao=?, valor=?, data=?, status=? WHERE ' . $where;

        //EXECUTA O INSERT (chamando o método execute, criado acima)
        $this->execute($query, array_values($values));

        return true;
    }

    /**
     * Método que irá fazer o DELETE no BD
     *
     * @param [string] $where
     * @return boolean
     */
    public function delete($where)
    {
        //MONTA A QUERY
        $query = 'DELETE FROM registros WHERE ' . $where;

        //EXECUTA O INSERT (chamando o método execute, criado acima)
        $this->execute($query);

        return true;
    }
}
