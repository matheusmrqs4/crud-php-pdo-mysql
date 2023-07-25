<?php

namespace App\Entity;

use App\Db\Database;

class Register
{
    /**
     * Identificador do Cadastro
     * @var integer
     */
    public $id;

    /**
     * Identificador do Usuário (FK)
     * @var integer
     */
    public $userId;

    /**
     * Descrição do Cadastro
     * @var string
     */
    public $descricao;


    /**
     * Valor do Cadastro
     * @var string
     */
    public $valor;


    /**
     * Data de Vencimento do Cadastro
     * @var string
     */
    public $data;


    /**
     * Status do Cadastro (se foi ou não pago)
     *
     * @var string (p/np)
     */
    public $status;


    /**
     * Método responsável por fazer o INSERT no BD
     *
     * @return boolean
     */
    public function insert()
    {
        //INSERIR A VAGA NO BANCO
        $obDatabase = new Database('registros');
        $this->id = $obDatabase->insert([
                'descricao' => $this->descricao,
                'valor' => $this->valor,
                'data' => $this->data,
                'status' => $this->status,
                'user_id' => $_SESSION['id']
        ]);

        //RETORNAR SUCESSO
        return true;
    }

    /**
     * Método responsável por fazer o UPDATE no BD
     *
     * @return boolean
     */
    public function update()
    {
        return (new Database('registros'))->update('registros.id=' . $this->id, [
                'descricao' => $this->descricao,
                'valor' => $this->valor,
                'data' => $this->data,
                'status' => $this->status
        ]);
    }

    /**
     * Método responsável por fazer o DELETE no DB
     *
     * @return boolean
     */
    public function delete()
    {
        return (new Database('registros'))->delete('registros.id=' . $this->id);
    }

    /**
     * Método responsável por obter os registros do BD
     *
     * @param  string $where
     * @return PDOStatement
     */
    public static function getRegister()
    {
        //OBTENDO O ID DO USUÁRIO LOGADO
        $loggedUserId = $_SESSION['id'];

        return (new Database('registros'))->select(null, $loggedUserId)->fetchAll();
    }


    /**
     * Método responsável por buscar um registro no BD de acordo com o ID
     *
     * @param integer $id
     * @return Register
     */
    public static function getRegisterUpdate($id)
    {
        return (new Database('registros'))->select('registros.id=' . $id)->fetchObject(self::class);
    }
}
