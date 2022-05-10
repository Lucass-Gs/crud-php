<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

class Cliente
{
      /**
       * Identificador único do cliente
       * @var integer
       */
      public $id;

      /**
       * Nome completo do cliente
       * @var string
       */
      public $nome;

      /**
       * Data de nascimento do cliente
       * @var string
       */
      public $data_nasc;

      /**
       * Email do cliente
       * @var string
       */
      public $email;

      /**
       * Whatsapp do cliente
       * @var string
       */
      public $num;
/**
       * Método responsável por cadastrar um novo cliente no banco
        * @return boolean
       */
    public function registrar()
    {
          //INSERIR O CLIENTE NO BANCO
          $obDatabase = new Database('clientes');
          $this -> id = $obDatabase -> insert([
                                                      'nome' => $this->nome,
                                                      'data_nasc' => $this->data_nasc,
                                                      'email' => $this->email,
                                                      'num' => $this->num
                                                ]);

            //RETORNAR SUCESSO
            return true;
    }

    /**
   * Método responsável por atualizar o cliente no banco
   * @return boolean
   */
    public function atualizar()
    {
            return (new Database('clientes')) ->update('id = ' . $this->id, [
                                                            'nome' => $this->nome,
                                                            'data_nasc' => $this->data_nasc,
                                                            'email' => $this->email,
                                                            'num' => $this->num
            ]);
    }

   /**
   * Método responsável por excluir o cliente do banco
   * @return boolean
   */
    public function excluir()
    {
            return (new Database('clientes')) ->delete('id = ' . $this->id);
    }

    /**
   * Método responsável por obter os clientes do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
    public static function getClientes($where = null, $order = null, $limit = null)
    {
          return (new Database('clientes'))     -> select($where, $order, $limit)
                                                                   -> fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
   * Método responsável por buscar um cliente com base em seu ID
   * @param  integer $id
   * @return Vaga
   */
    public static function getCliente($id)
    {
        return (new Database('clientes'))->select('id =  ' . $id)
                                                            ->fetchObject(self::class);
    }
}
